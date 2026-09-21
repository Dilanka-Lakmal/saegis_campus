<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Add this named route line:
Route::view('/student-portal', 'pages.portal')->name('portal');