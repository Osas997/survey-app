<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\SurveyRespon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $dataSurveyMurid = SurveyRespon::with(["murid", "murid.sekolah"])->get();
        $jumlahMurid = Murid::count();

        return view("dashboard.admin.dashboard", [
            "title" => "Admin Dashboard",
            "dataSurveyMurid" => $dataSurveyMurid,
            "jumlahMurid" => $jumlahMurid
        ]);
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
