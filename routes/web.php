<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/', [ChirpController::class, 'index']);

Route::post('/chirps', [ChirpController::class, 'store']);
Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);