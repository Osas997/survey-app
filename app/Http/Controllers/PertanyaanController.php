<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\Survey;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{

    public function index(Survey $survey)
    {
        $title = "Admin | Pertanyaan";
        $dataPertanyaan = Pertanyaan::where("id_survey", $survey->id)->search(request('search'))->get();
        return view('dashboard.admin.pertanyaan2', compact('dataPertanyaan', 'title', 'survey'));
    }

    public function create(Survey $survey)
    {
        return view('dashboard.admin.addPertanyaan', [
            "title" => "Tambah Pertanyaan",
            "survey" => $survey
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "id_survey" => "required",
            "pertanyaan" => "required",
            "tipe" => "required",
        ]);

        Pertanyaan::create($validate);
        return redirect()->route("admin.pertanyaan", $request->id_survey)->with('successAdd', "Pertanyaan Berhasil Di Tambah");
    }

    public function edit(Pertanyaan $pertanyaan)
    {
        return view('dashboard.admin.editPertanyaan', [
            "title" => "Edit Pertanyaan | " . $pertanyaan->pertanyaan,
            "pertanyaan" => $pertanyaan
        ]);
    }

    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        $validate = $request->validate([
            "pertanyaan" => "required",
            "tipe" => "required"
        ]);

        $pertanyaan->update($validate);

        return redirect()->route("admin.pertanyaan", $pertanyaan->id_survey)->with('successEdit', "Pertanyaan Berhasil Di Edit");
    }

    public function destroy(Pertanyaan $pertanyaan)
    {
        $pertanyaan->delete();
        return redirect()->back()->with('successDelete', "Pertanyaan Berhasil Di Hapus");
    }
}
