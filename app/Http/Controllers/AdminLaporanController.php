<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Sekolah;
use App\Models\SurveyRespon;
use Illuminate\Http\Request;

class AdminLaporanController extends Controller
{
    public function index()
    {
        $title = "Admin Laporan";
        $dataSekolah = Sekolah::search(request("search"))->get();
        return view('dashboard.admin.laporan', compact('title','dataSekolah'));
    }
    public function show(Sekolah $sekolah)
    {
        $namaSekolah = $sekolah->nama_sekolah;
        $title = "Laporan | ".$namaSekolah;
        $dataSiswa = Murid::with('surveyRespon')->where('id_sekolah', $sekolah->id)->get();
        $totalSiswa = Murid::with('surveyRespon')->where('id_sekolah', $sekolah->id)->count();
        return view('dashboard.admin.hasilSurvey', compact('title','dataSiswa','namaSekolah','totalSiswa'));
    }
}
