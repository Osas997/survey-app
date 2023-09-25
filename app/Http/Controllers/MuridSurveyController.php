<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use App\Models\Survey;
use App\Models\SurveyRespon;
use Illuminate\Http\Request;

class MuridSurveyController extends Controller
{
    public function survey(Survey $survey)
    {
        $pertanyaan = Pertanyaan::where('id_survey', $survey->id)->get();
        $respon = SurveyRespon::where("id_murid", auth('murid')->user()->id)->first();

        $cekSurvey = $respon ? true : false;

        return view('dashboard.murid.survey', [
            'title' => 'Survey Test',
            "dataPertanyaan" => $pertanyaan,
            "idSurvey" => $survey->id,
            "cekSurvey" => $cekSurvey
        ]);
    }
}
