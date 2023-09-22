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

    Route::resource("/survey", SurveyController::class)->name("index", "admin.survey")->name("show", "admin.pertanyaan")->name("create", 'admin.tambahSurvey')->name('edit', 'admin.viewEditSurvey');

    Route::get('/pertanyaan/create/{survey}', [PertanyaanController::class, "create"])->name('admin.viewTambahPertanyaan');
    Route::get("/pertanyaan/edit/{pertanyaan}", [PertanyaanController::class, "edit"])->name('admin.viewEditPertanyaan');
    Route::put("/pertanyaan/edit/{pertanyaan}", [PertanyaanController::class, "update"])->name('admin.editPertanyaan');
    Route::post("/pertanyaan", [PertanyaanController::class, "store"])->name('admin.tambahPertanyaan');
    Route::delete("/pertanyaan/{pertanyaan}", [PertanyaanController::class, "destroy"])->name('admin.hapusPertanyaan');
});


Route::middleware("sekolah")->prefix('sekolah')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "indexSekolah"])->name('sekolah.dashboard');

    Route::resource("/guru", GuruController::class)->name("index", "sekolah.guru");

    // Route::post("/guru", [GuruController::class, "import"]);

    // routing Test
    //
    Route::get('/murid', function () {
        return view('dashboard.sekolah.murid', [
            'title' => "Murid"
        ]);
    });
    Route::get('/guru/create', function () {
        return view('dashboard.sekolah.addGuru', [
            'title' => "Tambah Guru"
        ]);
    });
    Route::get('/murid/create', function () {
        return view('dashboard.sekolah.addMurid', [
            'title' => "Tambah Murid"
        ]);
    });
    //

    Route::post("/create-murid", [MuridController::class, "store"]);
});

Route::middleware("guru-sekolah")->group(function () {
    Route::get("/murid", [SekolahController::class, "store"]);
});
Route::middleware("murid")->prefix('murid')->group(function () {
    Route::get("/survey", function () {
        return "Hello siswa";
    });
    Route::get('/dashboard',function(){
        return view('dashboard.murid.dashboard',[
            'title'=>'Dashboard Murid'
        ]);
    });
});

