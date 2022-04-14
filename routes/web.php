<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PortofolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
    ]);
});

Route::get('/resume', function () {
    return view('resume',[
        "title" => "Resume",
    ]);
});

Route::get('/portofolio', [PortofolioController::class, 'index']);

Route::get('/contact', function () {
    return view('contact',[
        "title" => "Contact",
    ]);

});

//route untuk mahasiswa
Route::get('data-mahasiswa', [MahasiswaController::class, 'index']);
Route::get('create-mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');;
//route untuk Soal
Route::get('info-soal', [SoalController::class, 'index']);
Route::get('add-soal', [SoalController::class, 'create'])->name('soal.create');
Route::post('store-soal', [SoalController::class, 'store'])->name('soal.store');