<?php

use App\Http\Controllers\AuthController;
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

Route::prefix('admin')->group(function () {
    
});
Route::get('/dashboard', function () {
    return view('dashboard.admin.dashboard', [
        "title" => "Dashboard"
    ]);
})->name('admin.dashboard');

Route::get('/survey', function () {
    return view('dashboard.admin.survey', [
        "title" => "Survey"
    ]);
})->name('admin.survey');

Route::get('/sekolah', function () {
    return view('dashboard.admin.sekolah', [
        "title" => "Sekolah"
    ]);
})->name('admin.sekolah');

Route::get("/login", [AuthController::class, "login"]);
Route::post("/login", [AuthController::class, "authenticate"]);
Route::post("/register", [AuthController::class, "register"]);


Route::middleware("admin")->group(function () {
    Route::get("/test", function () {
        return "hello world";
    });
    Route::post("/create-sekolah", [SekolahController::class, "store"]);
    Route::resource("/dashboard/survey", SurveyController::class);
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
    Route::get("/survey", [SekolahController::class, "store"]);
});
