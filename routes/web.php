<?php

// routes/web.php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\ActorController;

Route::get('/media', [MediaController::class, 'index']);
Route::get('/media/{id}', [MediaController::class, 'show']);
Route::get('/media/search', [MediaController::class, 'search']);

Route::get('/actors', [ActorController::class, 'index']);
Route::get('/actors/{id}', [ActorController::class, 'show']);
