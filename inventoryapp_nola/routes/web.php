<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/register', [FormController::class, 'register']);
Route::post('/welcome', [DashboardController::class, 'welcome']);
