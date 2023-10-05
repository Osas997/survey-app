<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class SekolahLaporanController extends Controller
{
    public function index()
    {
        $namaSekolah = auth('sekolah')->user()->nama_sekolah;
        $title = "Laporan | " .  $namaSekolah;
        $dataSiswa = Murid::with('surveyRespon')->where('id_sekolah', auth('sekolah')->user()->id)->search(request("search"))->abjad()->get();
        $totalSiswa = Murid::where('id_sekolah', auth('sekolah')->user()->id)->count();
        return view('dashboard.sekolah.laporan', compact('title', 'dataSiswa', 'namaSekolah', 'totalSiswa'));
        // return response()->json($dataSiswa);
    }

    public function print()
    {
        $namaSekolah = auth('sekolah')->user()->nama_sekolah;
        $title = "Laporan | " .  $namaSekolah;
        $dataSiswa = Murid::with('surveyRespon')->where('id_sekolah', auth('sekolah')->user()->id)->abjad()->get();
        $totalSiswa = Murid::where('id_sekolah', auth('sekolah')->user()->id)->count();
        return view('dashboard.sekolah.print', compact('title', 'dataSiswa', 'namaSekolah', 'totalSiswa'));
    }
}
