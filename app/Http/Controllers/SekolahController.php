<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.admin.sekolah", [
            "title" => "Dashboard Sekolah"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "npsn" => "required|unique:sekolah",
            "password" => "required",
            "nama_sekolah" => "required",
            "alamat_sekolah" => "required",
            "status" => "required",
        ]);

        Sekolah::create($validate);
        return redirect("/dashboard/sekolah")->with('success', "Sekolah Berhasil Di Tambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sekolah $sekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        //
    }
}
