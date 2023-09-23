<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::where("id_sekolah", auth('sekolah')->user()->id)->search(request('search'))->paginate(5);
        return view('dashboard.sekolah.murid', [
            "title" => "Murid Sekolah | " .  auth('sekolah')->user()->nama_sekolah,
            "daftarMurid" => $murid
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sekolah.addMurid', [
            "title" => "Tambah Murid"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nisn" => "required|unique:murid",
            "password" => "required",
            "nama_murid" => "required",
            "alamat" => "required",
            "jenis_kelamin" => "required",
        ]);

        $validate['id_sekolah'] = auth('sekolah')->user()->id;

        Murid::create($validate);
        return redirect("/sekolah/murid")->with('success', "Guru Berhasil Di Tambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(Murid $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Murid $murid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Murid $murid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murid $murid)
    {
        //
    }
}
