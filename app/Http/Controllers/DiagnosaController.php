<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Diagnosa;
use App\Basis;
use App\Gejala;
use App\Kerusakan;
use App\Hasil;
use App\Riwayat;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kondisi = config('global.kondisi');
        $gejala = Gejala::all();
        return view('layout.user.menu.diagnosa.diagnosa', compact('gejala', 'kondisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $is_null = true;
        $argejala = [];
        // return $request->all();

        foreach ($request->kondisi as $i => $kondisi) {
            $arkondisi = explode("_", $request->kondisi[$i]);
            if ($is_null && isset($arkondisi[1])) $is_null = false;
            if (strlen($kondisi) > 1) {
                $argejala += array($arkondisi[0] => $arkondisi[1]);
            }
        }

        if ($is_null) return redirect('/user/diagnosa')->with('failed', 'true');

        $list_kondisi = config('global.kondisi');
        $arkondisitext = [];
        foreach ($list_kondisi as $i => $_kondisi) {
            $arkondisitext[$i] = $_kondisi['nama'];
        }

        //  Perhitungan CF 
        $kerusakans = Kerusakan::orderBy('kode_kerusakan', 'asc')->get();
        $ar_kerusakan = [];

        foreach ($kerusakans as $i => $kerusakan) {
            $cftotal_tmp = 0;
            $cf = 0;
            $cflama = 0;

            $gejalas = Basis::where('kode_kerusakan', $kerusakan->kode_kerusakan)->get();

            foreach ($gejalas as $j => $gejala) {

                foreach ($request->kondisi as $k => $kondisi) {
                    $tmp_kondisi = explode("_", $request->kondisi[$k]);
                    $tmp_gejala = $tmp_kondisi[0];

                    if ($gejala->kode_gejala == $tmp_gejala) {
                        $cf = $gejala->mb * @$list_kondisi[$tmp_kondisi[1]]['bobot'];
                        if (($cf >= 0) && ($cf * $cflama >= 0)) {
                            $cflama = $cflama + ($cf * (1 - $cflama));
                        }
                    }
                }
            }

            if ($cflama > 0) {
                $ar_kerusakan += array($kerusakan->kode_kerusakan => number_format($cflama, 4));
            }
        }

        // return $ar_kerusakan;

        // Mengurut data array kerusakan
        arsort($ar_kerusakan);
        // kegunaan serialize buat convert array ke string
        $inpgejala = serialize($argejala);
        $inpkerusakan = serialize($ar_kerusakan);


        //buat generate hasil diagnosa
        $index = 0;
        $data_kerusakan = [];
        $val_kerusakan = [];

        foreach ($ar_kerusakan as $key => $value) {
            $index++;
            $data_kerusakan[$index] = $key;
            $val_kerusakan[$index] = $value;
        }
        $data = $request->input();

        //untuk save

        $hasil = new Hasil();
        $hasil->nama_user = $data['nama_user'];
        $hasil->tanggal = $data['tanggal'];
        $hasil->gejala = $inpgejala;
        $hasil->kerusakan = $inpkerusakan;
        $hasil->hasil_id = @$data_kerusakan[1];
        $hasil->hasil_nilai = @$val_kerusakan[1];
        $hasil->save();



        return redirect('/user/hasilakhir/' . $hasil->id_hasil)->with('toast_success', 'Diagnosa Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conf_kondisi = config('global.kondisi');
        $hasil      = Riwayat::with('gejala_ch')->where('id_hasil', $id)->first();
        $arkerusakan = [];
        $argejala   = [];

        $arkerusakan = unserialize($hasil->kerusakan);
        $argejala = unserialize($hasil->gejala);

        $index = 0;
        $rating = null;
        $detail_kerusakan = [];
        $data_kerusakan = [];

        foreach ($arkerusakan as $key => $value) {
            if ($rating === null ||  $rating == $value) {
                $rating = $value;
                $q_kerusakan = Kerusakan::where('kode_kerusakan', $key)->first();

                $tmp_data['data'] = $key;
                $tmp_data['value'] = $value;
                $tmp_data['nama_kerusakan'] = $q_kerusakan ? $q_kerusakan->nama_kerusakan : '';
                $tmp_data['detail_kerusakan'] = $q_kerusakan ? $q_kerusakan->det_kerusakan : '';
                $tmp_data['saran_kerusakan'] = $q_kerusakan ? $q_kerusakan->srn_kerusakan : '';

                array_push($detail_kerusakan, $tmp_data);
            } else {
                $q_kerusakan = Kerusakan::where('kode_kerusakan', $key)->first();

                $tmp_data['data'] = $key;
                $tmp_data['value'] = $value;
                $tmp_data['nama_kerusakan'] = $q_kerusakan ? $q_kerusakan->nama_kerusakan : '';
                $tmp_data['detail_kerusakan'] = $q_kerusakan ? $q_kerusakan->det_kerusakan : '';
                $tmp_data['saran_kerusakan'] = $q_kerusakan ? $q_kerusakan->srn_kerusakan : '';

                array_push($data_kerusakan, $tmp_data);
            }
        }

        $data_gejala = [];
        $xxx = [];
        foreach ($argejala as $key => $value) {
            $id_kondisi = $value;

            $kode_gejala = $key;
            $tmp_gejala = Gejala::where('kode_gejala', $kode_gejala)->first();


            if ($tmp_gejala) {
                $tmp_kondisi = @$conf_kondisi[$id_kondisi];
                $kondisi_txt = ($tmp_kondisi) ? $tmp_kondisi['nama'] : '';
                $tmp_gejala->kondisi = $kondisi_txt;
                array_push($data_gejala, $tmp_gejala);
            }
        }


        // return $data_kerusakan;

        return view('layout.user.menu.diagnosa.show', compact('data_gejala', 'detail_kerusakan', 'data_kerusakan', 'hasil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gejala $gejala)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)

    {
    }
}

                        // if ($cf * $cflama < 0) {
                        //     $cflama = ($cflama + $cf) / (1 - Math.min(Math.abs($cflama), Math.abs($cf)));
                        // }

                        // if ( ($cf < 0) && ($cf * $cflama >= 0)) {
                        //     $cflama = $cflama + ($cf * (1 + $cflama));
                        // }
