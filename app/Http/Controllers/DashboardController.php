<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.admin.dashboard", [
            "title" => "Admin Dashboard"
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
}
