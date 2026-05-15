<?php

use App\Http\Controllers\AngelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});
