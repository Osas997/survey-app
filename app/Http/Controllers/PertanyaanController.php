<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\Survey;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function create(Survey $survey)
    {
        $survey = $survey->load("pertanyaan");

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
        return redirect("/dashboard/survey/" . $validate['id_survey'])->with('success', "Guru Berhasil Di Tambah");
    }
}
