<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Basis;
use App\Gejala;
use App\Kerusakan;


class BasisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basis = Basis::Paginate(1000);
        return view('layout.admin.menu.basis.basis', compact('basis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kerusakan = Kerusakan::all();
        $gejala = Gejala::all();
        return view('layout.admin.menu.basis.create', compact('kerusakan', 'gejala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'kode_kerusakan' => 'required',
            'kode_gejala' => 'required',
            'mb' => 'required'
        ]);

        Basis::create($request->all());
        return redirect('/admin/basis')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Basis $basis)
    {
        return view('layout.admin.menu.basis.show', compact('basis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Basis $basis)
    {
        $kerusakan = Kerusakan::all();
        $gejala = Gejala::all();
        return view('layout.admin.menu.basis.edit', compact('basis', 'kerusakan', 'gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basis $basis)
    {
        $request->validate([
            'kode_kerusakan' => 'required',
            'kode_gejala' => 'required',
            'mb' => 'required'
        ]);

        Basis::where('kode_pengetahuan', $basis->kode_pengetahuan)
            ->update([
                'kode_kerusakan' => $request->kode_kerusakan,
                'kode_gejala' => $request->kode_gejala,
                'mb' => $request->mb
            ]);
        return redirect('/admin/basis')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basis $basis)
    {
        Basis::destroy($basis->kode_pengetahuan);
        return redirect('/admin/basis')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
