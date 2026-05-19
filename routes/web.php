<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', [DashboardController::class, 'tampilanDashboard'])->name('dashboard');
// mahasiswa
Route::get('/form-mahasiswa', [MahasiswaController::class, 'create'])->name('form.mahasiswa');
Route::post('/form-mahasiswa-store', [MahasiswaController::class, 'store'])->name('store.mahasiswa');
Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'index'])->name('tabel.mahasiswa');

// Dosen
Route::get('/form-dosen', [DosenController::class, 'create'])->name('form.dosen');

// Jurusan
Route::get('/form-jurusan', [JurusanController::class, 'create'])->name('form.jurusan');
