<?php

namespace App\Http\Controllers;

use App\Imports\SekolahImport;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;

class SekolahController extends Controller
{

    public function import(Request $request)
    {
        $request->validate([
            'sekolah_exel' => 'required|mimes:xlsx,csv'
        ]);

        try {
            Excel::import(new SekolahImport, $request->file('sekolah_exel'));
            return redirect()->route('admin.sekolah')->with('successExel', 'Data Berhasil Di Import');
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
        return view("dashboard.admin.sekolah", [
            "title" => "Dashboard Sekolah",
            "dataSekolah" => Sekolah::search(request("search"))->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.admin.addSekolah", [
            "title" => "Tambah Sekolah",
        ]);
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
        return redirect("/admin/sekolah")->with('successAddSekolah', "Sekolah Berhasil Di Tambah");
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
        $validate = $request->validate([
            "password" => "required",
            "nama_sekolah" => "required",
            "alamat_sekolah" => "required",
            "status" => "required",
        ]);

        $sekolah->update($validate);
        return redirect("/admin/sekolah")->with('successEditSekolah', "Sekolah Berhasil Di Edit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete();
        return redirect("/admin/sekolah")->with('successDeleteSekolah', "Sekolah Berhasil Di Hapus");
    }
}
