<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisualController extends Controller
{
    public function index(Request $request)
    {
        $countMahasiswa = DB::table('mahasiswa')->count();
        $countTelatBpp = DB::table('tunggakan_bpp_mahasiswa')->count();
        $countPenerimaBeasiswa = DB::table('penerima_beasiswa')->count();
        $countMahasiswaTelatLulus = DB::table('penerima_beasiswa')->count();
        $countPesertaLomba = DB::table('lomba')->count();


        $countSakit = DB::table('covid')->where('kondisi', '=', 'Sakit')->count();
        $countSehat = DB::table('covid')->where('kondisi', '=', 'Sehat')->count();

        $beasiswaPrestasiCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa Prestasi')->count();
        $beasiswaKominfoCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa Kominfo')->count();
        $beasiswaBidikmisiCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa Bidikmisi')->count();
        $beasiswaYPTCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa YPT')->count();
        $beasiswaDjarumCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa Djarum')->count();
        $beasiswaBCACount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa BCA')->count();



        $dataLomba = Lomba::all();

        $arrayLombaRaw = array();

        foreach ($dataLomba as $row) {
            $lombaName = $row['Nama Lomba'];
            $arrayLombaRaw["data_lomba"][] = [
                "nim" => $row['NIM'],
                "nama_lomba" => $row['Nama Lomba'],
                "nama_mhs" => $row['nama'],
                "tahun_lomba" => (int) filter_var($lombaName, FILTER_SANITIZE_NUMBER_INT),
            ];
        }

        $arrayLombaRaw = $arrayLombaRaw["data_lomba"];

        $lombaCategory = DB::select("SELECT `Nama Lomba`, COUNT(NIM) as `nama_lomba` FROM lomba GROUP BY `Nama Lomba`");
        $penerimaBeasiswa = DB::select("SELECT `Jenis Beasiswa`, COUNT(NIM) as `count` FROM penerima_beasiswa GROUP BY `Jenis Beasiswa`");
        $alasanTunggakan = DB::select("SELECT `alasan tunggakan`, COUNT(nim) as `count` FROM tunggakan_bpp_mahasiswa GROUP BY `alasan tunggakan`");
        $mahasiswaTunggakan = DB::table("tunggakan_bpp_mahasiswa")->get();


        $compact  = compact(
            "countMahasiswa",
            "countTelatBpp",
            "countPenerimaBeasiswa",
            "countMahasiswaTelatLulus",
            "countPesertaLomba",
            "countSakit",
            "countSehat",
            "arrayLombaRaw",
            "lombaCategory",
            "penerimaBeasiswa",
            "mahasiswaTunggakan",
            "alasanTunggakan",
        );

        if (\Request::is('/')) {
            return view('layouts.visual.index')->with($compact);
            // show companies menu or something
        } else {
            return $compact;
        }
    }
}
