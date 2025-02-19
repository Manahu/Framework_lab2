<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;

// Rutele pentru HomeController
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

// Ruta resurselor pentru TaskController
Route::resource('tasks', TaskController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');

