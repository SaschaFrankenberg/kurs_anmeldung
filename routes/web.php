<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);
Route::get('/anmeldung', [PageController::class, 'anmeldung']);
Route::get('/kurse', [PageController::class, 'kurse']);
Route::get('/danke', [PageController::class, 'danke']);

Route::post('/anmeldung', [PageController::class, 'auswertung']);