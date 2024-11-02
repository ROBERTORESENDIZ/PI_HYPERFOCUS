<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiSemanaController;

// Ruta para la página de inicio del usuario
Route::view('/home', 'home')->name('rutahome');

// Ruta para la sección de concentración
Route::view('/concentracion', 'concentracion')->name('rutaconcentracion');

// Rutas para Mi Semana
Route::get('/mi-semana', [MiSemanaController::class, 'index'])->name('rutamisemana');
Route::post('/mi-semana/actividad', [MiSemanaController::class, 'guardarActividad'])->name('actividad.guardar');
Route::delete('/mi-semana/actividad/{id}', [MiSemanaController::class, 'eliminarActividad'])->name('actividad.eliminar');
Route::post('/mi-semana/tiempo/{tipo}', [MiSemanaController::class, 'guardarTiempo'])->name('tiempo.guardar');
