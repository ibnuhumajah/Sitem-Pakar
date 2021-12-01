<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Gejala;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gejala = Gejala::Paginate(1000);
        return view('layout.admin.menu.gejala.gejala', compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.admin.menu.gejala.create');
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
            'nama_gejala' => 'required'
        ]);

        Gejala::create($request->all());
        return redirect('/admin/gejala')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        return view('layout.admin.menu.gejala.show', compact('gejala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
        return view('layout.admin.menu.gejala.edit', compact('gejala'));
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

        $request->validate([
            'nama_gejala' => 'required',
        ]);

        Gejala::where('kode_gejala', $gejala->kode_gejala)
            ->update([
                'nama_gejala' => $request->nama_gejala
            ]);
        return redirect('/admin/gejala')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)

    {
        Gejala::destroy($gejala->kode_gejala);
        return redirect('/admin/gejala')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
