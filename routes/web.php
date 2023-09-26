<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\MuridSurveyController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SurveyController;
use App\Models\Jawaban;
use App\Models\Survey;
use App\Models\SurveyRespon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/asumalaka/{survey}', function (Request $request, Survey $survey) {
    // dd($request->survey->pertanyaan);
    $request->validate([
        "survey.*.id_pertanyaan" => "required",
        "survey.*.skor" => "required",
    ]);

    $surveyRespon = SurveyRespon::create([
        "id_survey" => $survey->id,
        "id_murid" => auth("murid")->user()->id,
        "skor_total_korban" => 0,
        "skor_total_pelaku" => 0
    ]);

    $idSurveyRespon = $surveyRespon->id;
    $skorTotalKorban = 0;
    $skorTotalPelaku = 0;

    foreach ($request->survey as $survey) {
        Jawaban::create([
            "id_pertanyaan" => $survey["id_pertanyaan"],
            "id_survey_respon" => $idSurveyRespon,
            "skor" => $survey["skor"]
        ]);

        if ($survey["tipe_pertanyaan"] == "korban") {
            $skorTotalKorban += $survey["skor"];
        } else if ($survey["tipe_pertanyaan"] == "pelaku") {
            $skorTotalPelaku += $survey["skor"];
        }
    }

    $surveyRespon->skor_total_pelaku = $skorTotalPelaku;
    $surveyRespon->skor_total_korban = $skorTotalKorban;
    $surveyRespon->save();
    return redirect()->back();
});



Route::middleware("sudahlogin")->group(function () {
    Route::get("/login", [AuthController::class, "login"])->name("login");
    Route::post("/login", [AuthController::class, "authenticate"]);
});

Route::post("/logout", [AuthController::class, "logout"])->name("logout")->middleware("auth:admin,sekolah,guru,murid");

Route::middleware("admin")->prefix('admin')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("admin.dashboard");

    Route::resource("/sekolah", SekolahController::class)->name("index", "admin.sekolah")->name("create", "admin.tambahSekolah");

    Route::resource("/survey", SurveyController::class)->name("index", "admin.survey")->name("show", "admin.pertanyaan")->name("create", 'admin.tambahSurvey')->name('edit', 'admin.viewEditSurvey')->name('update', 'admin.editSurvey');

    Route::get('/pertanyaan/create/{survey}', [PertanyaanController::class, "create"])->name('admin.viewTambahPertanyaan');
    Route::get("/pertanyaan/edit/{pertanyaan}", [PertanyaanController::class, "edit"])->name('admin.viewEditPertanyaan');
    Route::put("/pertanyaan/edit/{pertanyaan}", [PertanyaanController::class, "update"])->name('admin.editPertanyaan');
    Route::post("/pertanyaan", [PertanyaanController::class, "store"])->name('admin.tambahPertanyaan');
    Route::delete("/pertanyaan/{pertanyaan}", [PertanyaanController::class, "destroy"])->name('admin.hapusPertanyaan');

    Route::get("/{sekolah}/guru", [GuruController::class, "adminGuru"])->name('admin.viewGuru');
    Route::get("/{sekolah}/murid", [MuridController::class, "adminMurid"])->name('admin.viewMurid');
});


Route::middleware("sekolah")->prefix('sekolah')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "indexSekolah"])->name('sekolah.dashboard');

    Route::resource("/guru", GuruController::class)->name("index", "sekolah.guru")->name("create", "sekolah.viewTambahGuru")->name('store', 'sekolah.tambahGuru');

    Route::resource("/murid", MuridController::class)->name("index", "sekolah.murid")->name("create", "sekolah.viewTambahMurid")->name('store', 'sekolah.tambahMurid');

    // Route::post("/guru", [GuruController::class, "import"]);
});


Route::middleware("guru")->prefix('guru')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "indexGuru"])->name('guru.dashboard');
    Route::get("/murid", [MuridController::class, "viewGuruMurid"])->name('guru.viewMurid');
});

Route::middleware("murid")->prefix('murid')->group(function () {
    Route::get("/survey", function () {
        return "Hello siswa";
    });
    Route::get('/dashboard', [DashboardController::class, "indexMurid"])->name('murid.dashboard');

    Route::get('/survey/{survey}', [MuridSurveyController::class, "survey"])->name('murid.viewSurvey');
});

// Route::middleware("guru-sekolah")->group(function () {
//     Route::get("/murid", [SekolahController::class, "store"]);
// });