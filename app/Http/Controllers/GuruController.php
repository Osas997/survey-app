<?php

namespace App\Http\Controllers;

use App\Imports\GuruImport;
use App\Models\Guru;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function import(Request $request)
    {
        Excel::import(new GuruImport, $request->file('exel'));

        return redirect('/')->with('success', 'All good!');
    }

    public function index()
    {
        $guru = Guru::where("id_sekolah", auth('sekolah')->user()->id)->paginate(5);
        return view("dashboard.sekolah.guru", [
            "title" => "Sekolah | Guru",
            "daftarGuru" => $guru
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Guru";
        return view('dashboard.sekolah.addGuru', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nuptk" => "required|unique:guru",
            "nama" => "required",
            "jenis_kelamin" => "required",
            "password" => "required",
            "id_sekolah" => "required",
        ]);

        Guru::create($validate);
        return redirect("/dashboard/sekolah")->with('success', "Guru Berhasil Di Tambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        //
    }
}
