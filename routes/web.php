<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;

// Definisi rute-rute API desa
Route::get('/api/desa', [DesaController::class, 'index']);
Route::get('/api/desa/{id}', [DesaController::class, 'show']);
Route::post('/api/desa', [DesaController::class, 'store']);
Route::put('/api/desa/{id}', [DesaController::class, 'update']);
Route::delete('/api/desa/{id}', [DesaController::class, 'destroy']);
