<?php

use App\Http\Controllers\AuthController;
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
