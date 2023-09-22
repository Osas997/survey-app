<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\Survey;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function create(Survey $survey)
    {
        return view('dashboard.admin.addPertanyaan', [
            "title" => "Tambah Pertanyaan",
            "surveyId" => $survey->id
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "pertanyaan" => "required",
            "id_survey" => "required"
        ]);

        Pertanyaan::create($validate);
        return redirect("/admin/survey/" . $validate['id_survey'])->with('success', "Pertanyaan Berhasil Di Tambah");
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
            "id_survey" => "required"
        ]);

        $pertanyaan->update($validate);

        return redirect("/admin/survey/" . $validate['id_survey'])->with('success', "Pertanyaan Berhasil Di Edit");
    }

    public function destroy(Pertanyaan $pertanyaan)
    {
        $pertanyaan->delete();
        return redirect()->back()->with('success', "Survey Berhasil Di Hapus");
    }
}
