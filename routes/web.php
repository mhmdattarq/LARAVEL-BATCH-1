<?php

use App\Http\Controllers\AngelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.dashboard');
// });

// Route::get('/form-mahasiswa', function () {
//     return view('pages.Mahasiswa.FormMahasiswa');
// });

Route::get('/', [DashboardController::class, 'tampilanDashboard'])->name('dashboard');
Route::get('/form-mahasiswa', [MahasiswaController::class, 'create'])->name('form.mahasiswa');
