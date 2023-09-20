<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.admin.survey", [
            "title" => "Dashboard | Survey",
            "survey" => Survey::withCount("pertanyaan")->search(request('search'))->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.addSurvey', [
            "title" => "Tambah Survey"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nama_survey" => "required",
            "deskripsi" => "required",
        ]);

        Survey::create($validate);
        return redirect("/dashboard/survey")->with('success', "Survey Berhasil Di Tambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {

        $survey = $survey->load("pertanyaan");

        return view("dashboard.admin.pertanyaan", [
            "title" => "Detail Survey | " . $survey->nama_survey,
            "survey" => $survey
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
