<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Pertanyaan;
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
    public function print()
    {
        $pelakuBully = Pertanyaan::where('tipe', 'pelaku')
            ->whereHas('jawaban', function ($query) {
                $query->where('skor', '>', 2);
            })
            ->withCount([
                'jawaban as jawaban_skor_lebih_dari_2_count' => function ($query) {
                    $query->where('skor', '>', 2);
                },
                'jawaban as jawaban_skor_kurang_dari_3_count' => function ($query) {
                    $query->where('skor', '<', 3);
                }
            ])
            ->get();


        return view('dashboard.murid.print', compact('pelakuBully'));
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
