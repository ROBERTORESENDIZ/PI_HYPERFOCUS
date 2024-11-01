<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioSController;

// Route::get('/prueba', function () {
//     return view('welcome');
// });

//Route::view('/prueba','welcome');

Route::post('/iniciarsesion', [inicioSController::class, 'iniciarsesion'])->name('rutainiciarsesion');

