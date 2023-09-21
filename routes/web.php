<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PertanyaanController;
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
    Route::get("/login", [AuthController::class, "login"])->name("login");
    Route::post("/login", [AuthController::class, "authenticate"]);
});

Route::post("/logout", [AuthController::class, "logout"])->name("logout")->middleware("auth:admin,sekolah,guru,murid");

Route::middleware("admin")->prefix('admin')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("admin.dashboard");

    Route::resource("/sekolah", SekolahController::class)->name("index", "admin.sekolah")->name("create", "admin.tambahSekolah");

    Route::resource("/survey", SurveyController::class)->name("index", "admin.survey")->name("show", "admin.pertanyaan")->name("create", 'admin.tambahSurvey');

    Route::get('/create-pertanyaan/{survey}', [PertanyaanController::class, "create"])->name('admin.tambahPertanyaan');
    Route::post("/pertanyaan", [PertanyaanController::class, "store"]);
    Route::delete("/pertanyaan/{pertanyaan}", [PertanyaanController::class, "destroy"])->name('admin.hapusPertanyaan');
});


Route::middleware("sekolah")->prefix('sekolah')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "indexSekolah"])->name('sekolah.dashboard');

    Route::resource("/guru", GuruController::class)->name("index", "sekolah.guru");

    // Route::post("/guru", [GuruController::class, "import"]);

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
