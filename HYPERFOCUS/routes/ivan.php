<?php

use Illuminate\Support\Facades\Route;

// Route::get('/prueba', function () {
//     return view('welcome');
// });

Route::view('/prueba','welcome');

// Ruta para la página de inicio del usuario
Route::view('/home', 'home')->name('rutahome');

// Ruta para la sección de concentración
Route::view('/concentracion', 'concentracion')->name('rutaconcentracion');