<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Murid;
use App\Models\SurveyRespon;

class LaporanMuridController extends Controller
{
    public function index()
    {
        $dataLaporan = SurveyRespon::with(['jawaban', 'jawaban.pertanyaan'])->where("id_murid", auth("murid")->user()->id)->first();
        return view("dashboard.murid.laporan", [
            "title" => "Laporan Murid",
            "dataLaporan" => $dataLaporan,
        ]);
    }

    public function show(Murid $murid)
    {
        if ($this->userNotAllowed($murid)) {
            return abort(404);
        }

        $dataLaporan = SurveyRespon::with(['jawaban', 'jawaban.pertanyaan'])->where("id_murid", $murid->id)->first();
        return view("dashboard.laporan_murid", [
            "title" => "Laporan Survey Murid",
            "dataLaporan" => $dataLaporan,
            "namaMurid" => $murid->nama_murid,
            "no" => 1
        ]);
    }

    public function print()
    {

        $dataLaporan = SurveyRespon::with(['jawaban', 'jawaban.pertanyaan'])->where("id_murid", auth("murid")->user()->id)->first();
        return view("dashboard.murid.print", [
            "title" => "Laporan Murid",
            "dataLaporan" => $dataLaporan,
        ]);
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
