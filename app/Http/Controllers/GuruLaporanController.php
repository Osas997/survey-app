<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class GuruLaporanController extends Controller
{
    public function index()
    {
        $namaSekolah = auth('guru')->user()->sekolah->nama_sekolah;
        $title = "Laporan | " .  $namaSekolah;
        $dataSiswa = Murid::with('surveyRespon')->where('id_sekolah', auth('guru')->user()->id_sekolah)->search(request("search"))->get();
        $totalSiswa = Murid::with('surveyRespon')->where('id_sekolah', auth('guru')->user()->id_sekolah)->count();
        return view('dashboard.sekolah.laporan', compact('title','dataSiswa','namaSekolah','totalSiswa'));
        // return response()->json($dataSiswa);
    }
}
