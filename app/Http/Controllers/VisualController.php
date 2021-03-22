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
        $countMahasiswaTelatLulus = DB::table('telat_lulus')->count();
        $countPesertaLomba = DB::table('lomba')->count();


        $countSakit = DB::table('covid')->where('kondisi', '=', 'Sakit')->count();
        $countSehat = DB::table('covid')->where('kondisi', '=', 'Sehat')->count();
        $statusUntrackedCount = $countMahasiswa - $countSakit - $countSehat;


        $beasiswaPrestasiCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa Prestasi')->count();
        $beasiswaKominfoCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa Kominfo')->count();
        $beasiswaBidikmisiCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa Bidikmisi')->count();
        $beasiswaYPTCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa YPT')->count();
        $beasiswaDjarumCount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa Djarum')->count();
        $beasiswaBCACount = DB::table('penerima_beasiswa')->where('Jenis Beasiswa', '=', 'Beasiswa BCA')->count();


        $takCount = DB::table('tak_mhs')->sum('Nilai TAK');
        $tak1Count = DB::table('tak_mhs')->where('Nilai TAK', '<', 30)->count();
        $tak2Count =
            DB::table('tak_mhs')
            ->where('Nilai TAK', '>=', 30)
            ->where('Nilai TAK', '<=', 59)->count();
        $tak3Count =
            DB::table('tak_mhs')
            ->where('Nilai TAK', '>=', 60)
            ->where('Nilai TAK', '<=', 100)->count();
        $tak4Count = DB::table('tak_mhs')->where('Nilai TAK', '>',100)->count();


        $dataLomba = Lomba::all();
        $lombaCount = Lomba::all()->count();
        $arrayLombaRaw = array();
        $lomba18 = 0;
        $lomba19 = 0;
        $lomba20 = 0;

        foreach ($dataLomba as $row) {
            $lombaName = $row['Nama Lomba'];

            $lombaYear = (int) filter_var($lombaName, FILTER_SANITIZE_NUMBER_INT);
            if ($lombaYear == 2018) {
                $lomba18++;
            }
            if ($lombaYear == 2019) {
                $lomba19++;
            }
            if ($lombaYear == 2020) {
                $lomba20++;
            }

            $arrayLombaRaw["data_lomba"][] = [
                "nim" => $row['NIM'],
                "nama_lomba" => $row['Nama Lomba'],
                "nama_mhs" => $row['nama'],
                "tahun_lomba" => (int) filter_var($lombaName, FILTER_SANITIZE_NUMBER_INT),
            ];
        }



        $arrayLombaRaw = $arrayLombaRaw["data_lomba"];
        $lombaCategory = DB::select("SELECT `Nama Lomba` AS `nama_lomba`, COUNT(NIM) as `count` FROM lomba GROUP BY `Nama Lomba`");
        $penerimaBeasiswa = DB::select("SELECT `Jenis Beasiswa` as `from`, COUNT(NIM) as `count` FROM penerima_beasiswa GROUP BY `Jenis Beasiswa`");
        $providerBeasiswa = DB::select("SELECT `Jenis Beasiswa` as `provider` FROM penerima_beasiswa GROUP BY `Jenis Beasiswa`");
        $alasanTunggakan = DB::select("SELECT `alasan tunggakan`, COUNT(nim) as `count` FROM tunggakan_bpp_mahasiswa GROUP BY `alasan tunggakan`");
        $mahasiswaTunggakan = DB::table("tunggakan_bpp_mahasiswa")->get();
        
        $dataTelatLulus = DB::select("SELECT semester , COUNT(nim) as `count` from telat_lulus GROUP BY semester");


        $compact  = compact(
            "countMahasiswa",
            "countTelatBpp",
            "countPenerimaBeasiswa",
            "countMahasiswaTelatLulus",
            "countPesertaLomba",
            "countSakit",
            "countSehat",
            "statusUntrackedCount",
            "lombaCount",
            "lomba18",
            "lomba19",
            "lomba20",
            "lombaCategory",
            "takCount",
            "tak1Count",
            "tak2Count",
            "tak3Count",
            "tak4Count",
            "penerimaBeasiswa",
            "providerBeasiswa",
            "mahasiswaTunggakan",
            "alasanTunggakan",
            "dataTelatLulusgit",
        );

        if (\Request::is('/')) {
            return view('layouts.visual.index')->with($compact);
            // show companies menu or something
        } else {
            return $compact;
        }
    }
}
