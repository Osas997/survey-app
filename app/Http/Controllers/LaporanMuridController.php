<?php

namespace App\Http\Controllers;

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
}
