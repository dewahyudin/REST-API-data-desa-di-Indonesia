<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\DesaController;

// Definisi rute-rute API desa
Route::get('/api/desa', [DesaController::class, 'index']);
Route::get('/api/desa/{id}', [DesaController::class, 'show']);
Route::post('/api/desa', [DesaController::class, 'store']);
Route::put('/api/desa/{id}', [DesaController::class, 'update']);
Route::delete('/api/desa/{id}', [DesaController::class, 'destroy']);
>>>>>>> ed98fafebf0aae11713ca098d9b640f10aa75533
