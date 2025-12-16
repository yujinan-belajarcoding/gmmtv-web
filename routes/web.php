<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard routes - menggunakan Route::resource + tambahan custom routes
Route::resource('dashboard', DashboardController::class);
