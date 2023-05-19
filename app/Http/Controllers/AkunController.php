<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = \App\Akun::All();
        return view('akun.akun', ['akun' => $akun]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('akun.input');
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
        $save_akun = new \App\Akun;
        $save_akun->kdbrg = $request->get('kode');
        $save_akun->nmbrg = $request->get('nama');
        $save_akun->harga = $request->get('harga');
        $save_akun->jnsbrg = $request->get('jnsbrg');
        $save_akun->save();
        return redirect()->route('akun.index');
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
        $akun_edit = \App\Akun::findOrFail($id);
        return view('akun.edit', ['akun' => $akun_edit]);
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
        $akun = \App\Akun::findOrFail($id);
        $akun->kdbrg = $request->get('kode');
        $akun->nmbrg = $request->get('nama');
        $akun->harga = $request->get('harga');
        $akun->jnsbrg = $request->get('jenis');
        $akun->save();
        return redirect()->route('akun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $akun = \App\Akun::findOrFail($id);
        $akun->delete();
        return redirect()->route('akun.index');
    }
}
