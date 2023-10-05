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
        $dataSiswa = Murid::with('surveyRespon')->where('id_sekolah', auth('guru')->user()->id_sekolah)->search(request("search"))->abjad()->get();
        $totalSiswa = Murid::where('id_sekolah', auth('guru')->user()->id_sekolah)->count();
        return view('dashboard.guru.laporan', compact('title', 'dataSiswa', 'namaSekolah', 'totalSiswa'));
        // return response()->json($dataSiswa);
    }

    public function print()
    {
        $namaSekolah = auth('guru')->user()->sekolah->nama_sekolah;
        $title = "Laporan | " .  $namaSekolah;
        $dataSiswa = Murid::with('surveyRespon')->where('id_sekolah', auth('guru')->user()->id_sekolah)->abjad()->get();
        $totalSiswa = Murid::where('id_sekolah', auth('guru')->user()->id_sekolah)->count();
        return view('dashboard.sekolah.print', compact('title', 'dataSiswa', 'namaSekolah', 'totalSiswa'));
    }
}
