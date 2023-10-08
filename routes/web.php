<?php

use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GuruLaporanController;
use App\Http\Controllers\LaporanMuridController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\MuridSurveyController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SekolahLaporanController;
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
})->name('index');

Route::middleware("sudahlogin")->group(function () {
    Route::get("/login", [AuthController::class, "login"])->name("login");
    Route::post("/login", [AuthController::class, "authenticate"]);
});

Route::post("/logout", [AuthController::class, "logout"])->name("logout")->middleware("auth:admin,sekolah,guru,murid");

Route::middleware("admin")->prefix('admin')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("admin.dashboard");

    Route::resource("/sekolah", SekolahController::class)->name("index", "admin.sekolah")->name("create", "admin.tambahSekolah")->name("edit", "admin.editSekolah")->name('update', 'admin.updateSekolah')->name('destroy', 'admin.hapusSekolah');
    Route::post("/sekolah/import", [SekolahController::class, "import"])->name('admin.sekolahExel');

    Route::get('/pertanyaan', [PertanyaanController::class, "index"])->name('admin.pertanyaan');
    Route::get('/pertanyaan/create', [PertanyaanController::class, "create"])->name('admin.viewTambahPertanyaan');
    Route::get("/pertanyaan/edit/{pertanyaan}", [PertanyaanController::class, "edit"])->name('admin.viewEditPertanyaan');
    Route::put("/pertanyaan/edit/{pertanyaan}", [PertanyaanController::class, "update"])->name('admin.editPertanyaan');
    Route::post("/pertanyaan", [PertanyaanController::class, "store"])->name('admin.tambahPertanyaan');
    Route::delete("/pertanyaan/{pertanyaan}", [PertanyaanController::class, "destroy"])->name('admin.hapusPertanyaan');

    Route::get("/{sekolah}/guru", [GuruController::class, "adminGuru"])->name('admin.viewGuru');
    Route::get("/{sekolah}/murid", [MuridController::class, "adminMurid"])->name('admin.viewMurid');

    Route::get('/laporan', [AdminLaporanController::class, "index"])->name('admin.laporan');
    Route::get('/laporan/{sekolah}', [AdminLaporanController::class, "show"])->name('admin.hasilsurvey');
    Route::get('/laporan/{sekolah}/print', [AdminLaporanController::class, "print"])->name('admin.print');
});


Route::middleware("sekolah")->prefix('sekolah')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "indexSekolah"])->name('sekolah.dashboard');

    Route::resource("/guru", GuruController::class)->name("index", "sekolah.guru")->name("create", "sekolah.viewTambahGuru")->name('store', 'sekolah.tambahGuru')->name('destroy', 'sekolah.hapusGuru');

    Route::resource("/murid", MuridController::class)->name("index", "sekolah.murid")->name("create", "sekolah.viewTambahMurid")->name('store', 'sekolah.tambahMurid')->name('destroy', 'sekolah.hapusMurid');
    Route::get("/laporan", [SekolahLaporanController::class, "index"])->name('sekolah.hasilSurvey');
    Route::get("/laporan/print", [SekolahLaporanController::class, "print"])->name('sekolah.printSurvey');
    Route::post("/guru-import", [GuruController::class, "import"])->name('sekolah.guruExel');
    Route::post("/murid-import", [MuridController::class, "import"])->name('sekolah.muridExel');
});


Route::middleware("guru")->prefix('guru')->group(function () {
    Route::get("/dashboard", [DashboardController::class, "indexGuru"])->name('guru.dashboard');
    Route::get("/murid", [MuridController::class, "viewGuruMurid"])->name('guru.viewMurid');
    Route::get("/laporan", [GuruLaporanController::class, "index"])->name('guru.hasilSurvey');
    Route::get("/laporan/print", [GuruLaporanController::class, "print"])->name('guru.printSurvey');
});

Route::middleware("murid")->prefix('murid')->group(function () {
    Route::get('/dashboard', [DashboardController::class, "indexMurid"])->name('murid.dashboard');

    Route::get('/survey', [MuridSurveyController::class, "survey"])->name('murid.viewSurvey');
    Route::post('/survey', [MuridSurveyController::class, "store"])->name('murid.tambahSurvey');

    Route::get("/laporan", [LaporanMuridController::class, "index"])->name('murid.laporan');
    Route::get("/laporan/print", [LaporanMuridController::class, "print"])->name('murid.print');
});

Route::get("/murid/{murid}/laporan", [LaporanMuridController::class, "show"])->name("laporan_murid")->middleware("except_murid");
