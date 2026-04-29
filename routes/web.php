<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChirpController;

Route::get('/', function () {
    return redirect('/welcome');
});

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/register', 'auth.register');

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {

    Route::get('/welcome', [ChirpController::class, 'index']);

    Route::post('/chirps', [ChirpController::class, 'store']);
    Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});