<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\SekolahController;
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


Route::get("/login", [AuthController::class, "login"]);
Route::post("/login", [AuthController::class, "authenticate"]);
Route::post("/register", [AuthController::class, "register"]);

Route::middleware("admin")->group(function () {
    Route::get("/admin", function () {
        return "hello world";
    });
    Route::post("/create-sekolah", [SekolahController::class, "store"]);
});

Route::middleware("auth:sekolah")->group(function () {
    Route::post("/create-guru", [GuruController::class, "store"]);
    Route::post("/create-murid", [MuridController::class, "store"]);
});

Route::middleware("auth:murid")->group(function () {
    // Route::post("/murid", [SekolahController::class, "store"]);
});
