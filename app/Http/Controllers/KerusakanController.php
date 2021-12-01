<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kerusakan;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerusakan = Kerusakan::Paginate(1000);
        return view('layout.admin.menu.kerusakan.kerusakan', compact('kerusakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.admin.menu.kerusakan.create');
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
            'nama_kerusakan' => 'required',
            'det_kerusakan' => 'required',
            'srn_kerusakan' => 'required'
        ]);

        Kerusakan::create($request->all());
        return redirect('/admin/kerusakan')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kerusakan $kerusakan)
    {
        return view('layout.admin.menu.kerusakan.show', compact('kerusakan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerusakan $kerusakan)
    {
        return view('layout.admin.menu.kerusakan.edit', compact('kerusakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerusakan $kerusakan)

    {

        $request->validate([
            'nama_kerusakan' => 'required',
            'det_kerusakan' => 'required',
            'srn_kerusakan' => 'required'
        ]);

        Kerusakan::where('kode_kerusakan', $kerusakan->kode_kerusakan)
            ->update([
                'nama_kerusakan' => $request->nama_kerusakan,
                'det_kerusakan' => $request->det_kerusakan,
                'srn_kerusakan' => $request->srn_kerusakan
            ]);
        return redirect('/admin/kerusakan')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerusakan $kerusakan)
    {
        // example:
        Kerusakan::destroy($kerusakan->kode_kerusakan);
        return redirect('/admin/kerusakan')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
