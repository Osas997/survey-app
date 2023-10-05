<?php

namespace App\Http\Controllers;

use App\Imports\MuridImport;
use App\Models\Murid;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;

class MuridController extends Controller
{

    public function import(Request $request)
    {
        $request->validate([
            'murid_exel' => 'required|mimes:xlsx,csv'
        ]);
        try {
            Excel::import(new MuridImport, $request->file('murid_exel'));
            return redirect()->route('sekolah.murid')->with('successExel', 'Data Berhasil Di Import');
        } catch (ValidationException $e) {
            $failures = $e->failures();
            // Anda bisa melakukan sesuatu dengan $failures di sini, misalnya menampilkan kesalahan ke pengguna.
            return back()->with(['failures' => $failures]);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murid = Murid::where("id_sekolah", auth('sekolah')->user()->id)->search(request('search'))->abjad()->paginate(20);
        return view('dashboard.sekolah.murid', [
            "title" => "Murid Sekolah | " .  auth('sekolah')->user()->nama_sekolah,
            "daftarMurid" => $murid
        ]);
    }

    public function adminMurid(Sekolah $sekolah)
    {
        $daftarMurid = Murid::where("id_sekolah", $sekolah->id)->search(request('search'))->abjad()->paginate(20);

        return view("dashboard.admin.murid", [
            "title" => "Sekolah | Guru",
            "daftarMurid" => $daftarMurid,
            "namaSekolah" => $sekolah->nama_sekolah
        ]);
    }

    public function viewGuruMurid()
    {
        $murid = Murid::where("id_sekolah", auth('guru')->user()->sekolah->id)->search(request('search'))->abjad()->paginate(20);
        $namaSekolah = auth('guru')->user()->sekolah->nama_sekolah;
        return view('dashboard.guru.murid', [
            "title" => "Murid Sekolah | " .  $namaSekolah,
            "daftarMurid" => $murid,
            "namaSekolah" => $namaSekolah
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
        return redirect("/sekolah/murid")->with('successAddMurid', "Murid Berhasil Di Tambah");
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
