<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan');
    }
    
    public function show(Request $request)
    {
        $periode = $request->get('periode');
        $jenis = $request->get('jenis');
        if ($jenis == 'juals') {

            if ($periode == 'All') {
                $data = \App\juals::All();
                $pdf = PDF::loadview('juals.juals_pdf', ['juals' => $data])->setPaper('A4', 'landscape');
                return $pdf->stream();
            } elseif ($periode == 'periode') {
                $tglawal = $request->get('tglawal');
                $tglakhir = $request->get('tglakhir');
                $data = DB::table('juals')
                    ->whereBetween('tglkk', [$tglawal, $tglakhir])
                    ->orderby('tglkk', 'ASC')
                    ->get();
                $pdf = PDF::loadview('juals.juals_pdf', ['juals' => $data])->setPaper('A4', 'landscape');

                return $pdf->stream();
            }
        }
    }
}
