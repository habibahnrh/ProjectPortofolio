<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelanggansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = \App\Pelanggans::All();
        return view('pelanggans.pelanggans', ['pelanggans' => $pelanggans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggans.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Menyimpan data kedalam tabel
         $save_plgn = new \App\Pelanggans;
         $save_plgn->nama = $request->get('nama');
         $save_plgn->tgldftr = $request->get('tgldftr');
         $save_plgn->alamat = $request->get('alamat');
         $save_plgn->email = $request->get('email');
         $save_plgn->notelp = $request->get('notelp');
         $save_plgn->save();
         return redirect()->route('pelanggans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggans_edit = \App\Pelanggans::findOrFail($id);
        return view('pelanggans.edit', ['pelanggans' => $pelanggans_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggans = \App\Pelanggans::findOrFail($id);
        $pelanggans->nama = $request->get('nama');
        $pelanggans->tgldftr = $request->get('tgldftr');
        $pelanggans->alamat = $request->get('alamat');
        $pelanggans->email = $request->get('email');
        $pelanggans->notelp = $request->get('notelp');
        $pelanggans->save();
        return redirect()->route('pelanggans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggans = \App\Pelanggans::findOrFail($id);
        $pelanggans->delete();
        return redirect()->route('pelanggans.index');
    }
}
