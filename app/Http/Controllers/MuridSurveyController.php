<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\Survey;
use App\Models\SurveyRespon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    // Experimental
    public function survey1(Survey $survey)
    {
        $pertanyaan = Pertanyaan::where('id_survey', $survey->id)->get();
        $respon = SurveyRespon::where("id_murid", auth('murid')->user()->id)->first();

        $cekSurvey = $respon ? true : false;

        return view('dashboard.murid.survey1', [
            'title' => 'Survey Test',
            "dataPertanyaan" => $pertanyaan,
            "idSurvey" => $survey->id,
            "cekSurvey" => $cekSurvey
        ]);
    }
    // Experimental
    public function store1(Request $request){
        $pengarang= $request->input('jawaban');
        return $pengarang;
    }
    public function store(Request $request, Survey $survey)
    {
        // dd($request->survey->pertanyaan);
        $request->validate([
            "survey.*.id_pertanyaan" => "required",
            "survey.*.skor" => "required",
        ]);

        try {
            DB::beginTransaction();
            $surveyRespon = SurveyRespon::create([
                "id_survey" => $survey->id,
                "id_murid" => auth("murid")->user()->id,
                "skor_total_korban" => 0,
                "skor_total_pelaku" => 0
            ]);

            $skorTotalKorban = 0;
            $skorTotalPelaku = 0;

            foreach ($request->survey as $survey) {
                Jawaban::create([
                    "id_pertanyaan" => $survey["id_pertanyaan"],
                    "id_survey_respon" => $surveyRespon->id,
                    "skor" => $survey["skor"]
                ]);

                if ($survey["tipe_pertanyaan"] == "korban") {
                    $skorTotalKorban += $survey["skor"];
                } else if ($survey["tipe_pertanyaan"] == "pelaku") {
                    $skorTotalPelaku += $survey["skor"];
                }
            }

            $surveyRespon->update([
                'skor_total_pelaku' => $skorTotalPelaku,
                'skor_total_korban' => $skorTotalKorban
            ]);

            DB::commit();
            return redirect(route('murid.dashboard'))->with("success", "Berhasil Menjawab Survey Lihat Skor Di Hasil Survey");
        } catch (\Exception $e) {
            DB::rollback();
            // Anda dapat menambahkan log error atau menampilkan pesan error ke pengguna
            // return back()->withError('Something went wrong.');
            throw $e;  // Atau lemparkan kesalahan untuk debugging lebih lanjut.
        }
    }
}
