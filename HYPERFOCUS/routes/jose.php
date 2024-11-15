<?php

use Illuminate\Support\Facades\Route;

// Route::get('/prueba', function () {
//     return view('welcome');


// Ruta para la página de inicio del usuario
Route::view('/memoriacrud', 'memoriacrud')->name('rutamemoriacrud');