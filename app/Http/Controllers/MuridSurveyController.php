<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\Survey;
use Illuminate\Http\Request;

class MuridSurveyController extends Controller
{
    public function survey(Survey $survey)
    {

        $pertanyaan = Pertanyaan::where('id_survey', $survey->id)->get();
        return view('dashboard.murid.survey', [
            'title' => 'Survey Test',
            "dataPertanyaan" => $pertanyaan
        ]);
    }
}
