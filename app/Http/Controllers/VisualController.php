<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisualController extends Controller
{
    public function index(){
        $countMahasiswa = DB::table('mahasiswa')->count();
        $countTelatBpp = DB::table('tunggakan_bpp_mahasiswa')->count();
        $countPenerimaBeasiswa= DB::table('penerima_beasiswa')->count();
        $countMahasiswaTelatLulus= DB::table('penerima_beasiswa')->count();
        $countPesertaLomba= DB::table('lomba')->count();
        return view("layouts.visual.index")->with(compact(
            "countMahasiswa", 
            "countTelatBpp", 
            "countPenerimaBeasiswa", 
            "countMahasiswaTelatLulus", 
            "countPesertaLomba", 
        ));
    }


}
