<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JumlahController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//home
Route::get('/', [HomeController::class, 'index']);
Route::get('/tentangkami', [HomeController::class, 'tentangkami']);
Route::get('/visimisi', [HomeController::class, 'visimisi']);
Route::get('/sambutan', [HomeController::class, 'sambutan']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/ppdb', [HomeController::class, 'ppdb']);
Route::get('/berita', [HomeController::class, 'berita']);
Route::get('/contact', [HomeController::class, 'contact']);

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//dashboard
Route::prefix('/admin')->middleware('auth')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('sliders', SliderController::class);
    Route::resource('beritas', BeritaController::class);
    Route::resource('galeris', GaleriController::class);
    Route::resource('jumlahs', JumlahController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('misis', MisiController::class);

    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);


    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);

    Route::get('sambutan', [SambutanController::class, 'index']);
    Route::put('sambutan/{id}', [SambutanController::class, 'update']);

    Route::get('visi', [VisiController::class, 'index']);
    Route::put('visi/{id}', [VisiController::class, 'update']);

    Route::get('ppdb', [PpdbController::class, 'index']);
    Route::put('ppdb/{id}', [PpdbController::class, 'update']);

});
