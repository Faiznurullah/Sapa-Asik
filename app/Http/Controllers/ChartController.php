<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified', 'checkRole:admin,user']);
    }
    public function chart()
    {
      
        $label         = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    
        for($bulan=1;$bulan < 13;$bulan++){
            $ax = Auth::user()->id;
            $aspirasi     = collect(DB::SELECT("SELECT count(id) AS jumlah1 from aspirasi where month(created_at)='$bulan' and name_id=$ax"))->first();
            $aspirasi_jum[] = $aspirasi->jumlah1;
            }

            for($bulan=1;$bulan < 13;$bulan++){
                $aspirasia    = collect(DB::SELECT("SELECT count(id) AS jumlah1 from aspirasi where month(created_at)='$bulan'"))->first();
                $aspirasi_juma[] = $aspirasia->jumlah1;
                }

         
        return view('chart.chart', compact('label', 'aspirasi_jum', 'aspirasi_juma'));
        
    }


}
