<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Murid;
use App\Models\Sekolah;
use App\Models\SurveyRespon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Admin Dashboard";

        $jumlahMurid = Murid::count();
        $jumlahSekolah = Sekolah::count();
        $jumlahGuru = Guru::count();

        // jumlahKorban
        $korbanRendah = SurveyRespon::korbanRendah()->count();
        $korbanSedang = SurveyRespon::korbanSedang()->count();
        $korbanTinggi = SurveyRespon::korbanTinggi()->count();
        $korbanSangatTinggi = SurveyRespon::korbanSangatTinggi()->count();

        // jumlahPelaku
        $pelakuRendah = SurveyRespon::pelakuRendah()->count();
        $pelakuSedang = SurveyRespon::pelakuSedang()->count();
        $pelakuTinggi = SurveyRespon::pelakuTinggi()->count();
        $pelakuSangatTinggi = SurveyRespon::pelakuSangatTinggi()->count();

        return view("dashboard.admin.dashboard", compact('title', 'jumlahMurid', 'jumlahSekolah', 'jumlahGuru', 'korbanRendah', 'korbanSedang', 'korbanTinggi', 'korbanSangatTinggi', 'pelakuRendah', 'pelakuSedang', 'pelakuTinggi', 'pelakuSangatTinggi'));
    }
    public function indexSekolah()
    {
        return view('dashboard.sekolah.dashboard', [
            'title' => "Sekolah Dashboard"
        ]);
    }

    public function indexGuru()
    {
        return view('dashboard.guru.dashboard', [
            'title' => "Guru Dashboard"
        ]);
    }

    public function indexMurid()
    {
        return view('dashboard.murid.dashboard', [
            'title' => 'Dashboard Murid'
        ]);
    }
}
