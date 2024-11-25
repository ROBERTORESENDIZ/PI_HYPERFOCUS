<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioSController;
use App\Http\Controllers\LogrosController;

Route::get('/mislogros', [LogrosController::class, 'mostrarLogros'])->name('rutamislogros');

// Route::get('/prueba', function () {
//     return view('welcome');
// });

//Route::view('/prueba','welcome');

Route::post('/iniciarsesion', [inicioSController::class, 'iniciarsesion'])->name('rutainiciarsesion');

Route::post('/registrarse', [inicioSController::class, 'registrarse'])->name('registrarse');

Route::get('/admiUsuarios', [inicioSController::class, 'listarUsuarios'])->name('admiUsuarios');
Route::get('/usuarios/{id}/editar', [inicioSController::class, 'editarUsuario'])->name('usuarios.editar');
Route::post('/usuarios/{id}/actualizar', [inicioSController::class, 'actualizarUsuario'])->name('usuarios.actualizar');
Route::delete('/eliminarUsuario/{id}', [InicioSController::class, 'eliminarUsuario'])->name('eliminarUsuario');


