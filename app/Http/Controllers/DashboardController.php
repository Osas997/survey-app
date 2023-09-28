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
        $title = "Sekolah Dashboard";

        $jumlahMurid = Murid::where('id_sekolah', auth('sekolah')->user()->id)->count();
        $jumlahGuru = Guru::where('id_sekolah', auth('sekolah')->user()->id)->count();

        // jumlahKorban
        $korbanRendah = SurveyRespon::korbanRendah()->sekolah()->count();
        $korbanSedang = SurveyRespon::korbanSedang()->sekolah()->count();
        $korbanTinggi = SurveyRespon::korbanTinggi()->sekolah()->count();
        $korbanSangatTinggi = SurveyRespon::korbanSangatTinggi()->sekolah()->count();

        // jumlahPelaku
        $pelakuRendah = SurveyRespon::pelakuRendah()->sekolah()->count();
        $pelakuSedang = SurveyRespon::pelakuSedang()->sekolah()->count();
        $pelakuTinggi = SurveyRespon::pelakuTinggi()->sekolah()->count();
        $pelakuSangatTinggi = SurveyRespon::pelakuSangatTinggi()->sekolah()->count();

        return view('dashboard.sekolah.dashboard', compact('title', 'jumlahMurid', 'jumlahGuru', 'korbanRendah', 'korbanSedang', 'korbanTinggi', 'korbanSangatTinggi', 'pelakuRendah', 'pelakuSedang', 'pelakuTinggi', 'pelakuSangatTinggi'));
    }

    public function indexGuru()
    {
        $title = "Guru Dashboard";

        $jumlahMurid = Murid::where('id_sekolah', auth('guru')->user()->sekolah->id)->count();

        // jumlahKorban
        $korbanRendah = SurveyRespon::korbanRendah()->guruSekolah()->count();
        $korbanSedang = SurveyRespon::korbanSedang()->guruSekolah()->count();
        $korbanTinggi = SurveyRespon::korbanTinggi()->guruSekolah()->count();
        $korbanSangatTinggi = SurveyRespon::korbanSangatTinggi()->guruSekolah()->count();

        // jumlahPelaku
        $pelakuRendah = SurveyRespon::pelakuRendah()->guruSekolah()->count();
        $pelakuSedang = SurveyRespon::pelakuSedang()->guruSekolah()->count();
        $pelakuTinggi = SurveyRespon::pelakuTinggi()->guruSekolah()->count();
        $pelakuSangatTinggi = SurveyRespon::pelakuSangatTinggi()->guruSekolah()->count();

        return view('dashboard.guru.dashboard', compact('title', 'jumlahMurid', 'korbanRendah', 'korbanSedang', 'korbanTinggi', 'korbanSangatTinggi', 'pelakuRendah', 'pelakuSedang', 'pelakuTinggi', 'pelakuSangatTinggi'));
    }

    public function indexMurid()
    {
        return view('dashboard.murid.dashboard', [
            'title' => 'Dashboard Murid'
        ]);
    }
}
