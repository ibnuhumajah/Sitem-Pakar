<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Riwayat;
use App\Kerusakan;
use App\Gejala;
use App\Hasil;

class PDFController extends Controller
{
    public function pdf($id, Hasil $hasil)
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

        $pdf = PDF::loadView('layout.user.menu.cetak', compact('data_gejala', 'detail_kerusakan', 'data_kerusakan', 'hasil'))->setPaper('A4', 'landscape');
        return $pdf->download('hasil_diagnosa.pdf');
    }
}
