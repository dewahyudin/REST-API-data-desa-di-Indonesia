<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD

Route::get('api/desa');
Route::get('api/desa/{id}');
Route::post('api/desa');
Route::put('api/desa');
Route::delete('api/desa');
=======
>>>>>>> ed98fafebf0aae11713ca098d9b640f10aa75533
