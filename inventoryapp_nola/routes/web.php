<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\GameController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/register', [FormController::class, 'register']);
Route::post('/welcome', [DashboardController::class, 'welcome']);

// categories
// create data
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);

// get data
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

// update data
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{id}', [CategoryController::class, 'update']);

// delete data
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

// game
// create data
Route::get('/game/create', [GameController::class, 'create']);
Route::post('/game', [GameController::class, 'store']);

// get data
Route::get('/game', [GameController::class, 'index']);
Route::get('/game/{id}', [GameController::class, 'show']);

// update data
Route::get('/game/{id}/edit', [GameController::class, 'edit']);
Route::put('/game/{id}', [GameController::class, 'update']);

// delete data
Route::delete('/game/{id}', [GameController::class, 'destroy']);