<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorHome;

// Route::get('/prueba', function () {
//     return view('welcome');
// });

Route::view('/prueba','welcome');

Route::get('/home',[controladorHome::class,'vistaHome'])->name('rutahome');
Route::Post('/guardarProgreso',[controladorHome::class,'guardarProgreso'])->name('rutaguardarprogreso');