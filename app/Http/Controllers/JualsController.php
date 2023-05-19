<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\juals;
use DB;

class JualsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jl = \App\juals::All();
        return view('juals.juals', ['juals' => $jl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akun = \App\Akun::All();
        $akun2 = juals::paginate(3);
        $AWAL = 'KK';
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $bulanRomawi = array(
            "", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII"
        );
        $noUrutAkhir = \App\juals::max('id');
        $nomorawal = $noUrutAkhir + 1;
        $no = 1;
        if ($noUrutAkhir) {
            //echo "No urut surat di database : " . $noUrutAkhir;
            //echo "<br>";
            $nomor = sprintf($AWAL . '-' . "%05s", abs($noUrutAkhir + 1));
        } else {
            //echo "No urut surat di database : 0" ;
            //echo "<br>";
            $nomor = sprintf($AWAL . '-' . "%05s", $no);
        }
        return view('juals.input', ['nomor' => $nomor, 'nomorawal' => $nomorawal, 'akun' => $akun, 'akn' => $akun2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Menyimpan Data Ke Tabel Juals
         $save_jl = new \App\juals;
         $save_jl->nokk = $request->get('notrans');
         $save_jl->tglkk = $request->get('tgltr');
         $save_jl->jmkk = $request->get('total');
         $save_jl->save();
 
         return redirect()->route('juals.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kk = \App\juals::findOrFail($id);
        $kk->delete();
        
        return redirect()->route('juals.index');
    }
}
