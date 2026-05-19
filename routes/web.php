<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', [DashboardController::class, 'tampilanDashboard'])->name('dashboard');
// mahasiswa
Route::get('/form-mahasiswa', [MahasiswaController::class, 'create'])->name('form.mahasiswa');
Route::post('/form-mahasiswa-store', [MahasiswaController::class, 'store'])->name('store.mahasiswa');
Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'index'])->name('tabel.mahasiswa');
