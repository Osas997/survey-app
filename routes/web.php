<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SurveyController;
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

Route::middleware("sudahlogin")->group(function () {
    Route::get("/login", [AuthController::class, "login"]);
    Route::post("/login", [AuthController::class, "authenticate"]);
});

Route::get("/logout", [AuthController::class, "logout"]);

Route::middleware("admin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("admin.dashboard");
    Route::resource("/dashboard/survey", SurveyController::class)->name("index", "admin.survey");
    Route::resource("/dashboard/sekolah", SekolahController::class)->name("index", "admin.sekolah");
    Route::get("/dashboard/murid", function () {
        return view("dashboard.admin.murid", [
            "title" => "Murid"
        ]);
    });
    Route::get("/dashboard/pertanyaan", function () {
        return view('dashboard.admin.pertanyaan', [
            "title" => "Pertanyaan"
        ]);
    });
    Route::get("/dashboard/addsurvey", function () {
        return view('dashboard.admin.addSurvey', [
            "title" => "Tambah Survey"
        ]);
    });
});

Route::middleware("sekolah")->group(function () {
    Route::post("/guru", [GuruController::class, "import"]);
    Route::post("/create-guru", [GuruController::class, "store"]);
    Route::post("/create-murid", [MuridController::class, "store"]);
});

Route::middleware("guru-sekolah")->group(function () {
    Route::get("/murid", [SekolahController::class, "store"]);
});

Route::middleware("murid")->group(function () {

    Route::get("/survey", function () {
        return "Hello siswa";
    });
});
