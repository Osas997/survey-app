<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Murid;
use App\Models\SurveyRespon;
use Illuminate\Http\Request;

class LaporanMuridController extends Controller
{
    public function index()
    {
        $dataLaporan = SurveyRespon::where("id_murid", auth("murid")->user()->id)->first();
        return view("dashboard.murid.laporan", [
            "title" => "Laporan Murid",
            "dataLaporan" => $dataLaporan
        ]);
    }

    public function show(Murid $murid)
    {
        if ($this->userNotAllowed($murid)) {
            return abort(404);
        }

        $dataLaporan = SurveyRespon::where("id_murid", $murid->id)->first();
        dd($dataLaporan);
        return view("dashboard.laporan_murid", [
            "title" => "Laporan Survey Murid",
            "dataLaporan" => $dataLaporan
        ]);
    }
    public function print(){
        $jawabanBullyingPalingBanyak = Jawaban::whereHas('pertanyaan', function ($query) {
            $query->where('tipe', 'pelaku');
        })->get();
        
        $perilaku = []; // Inisialisasi array perilaku
        
        if ($jawabanBullyingPalingBanyak->isNotEmpty()) {
            foreach ($jawabanBullyingPalingBanyak as $pelaku) {
                $perilaku[$pelaku->pertanyaan->pertanyaan] = Jawaban::whereBetween("skor", [3, 4])->where("id_pertanyaan", $pelaku->pertanyaan->id)->count(); // Menghitung jumlah jawaban untuk setiap "pelaku"
            }
        }
        
        // dd($jawabanBullyingPalingBanyak, $perilaku); // Output kedua variabel untuk pemeriksaan 
        return view('dashboard.murid.print');
    }

    protected function userNotAllowed(Murid $murid): bool
    {
        if (auth('sekolah')->check() && auth('sekolah')->user()->id !== $murid->id_sekolah) {
            return true;
        }
        if (auth('guru')->check() && auth('guru')->user()->sekolah->id !== $murid->id_sekolah) {
            return true;
        }
        return false;
    }

}
