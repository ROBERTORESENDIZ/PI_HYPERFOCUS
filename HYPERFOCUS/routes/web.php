<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/','index')->name('rutaprincipal');
Route::view('/planes','planes')->name('rutaplanes');
Route::view('/preguntas','preguntasf')->name('rutapreguntas');

Route::view('/iniciarsesion','iniciarSesion')->name('rutainiciarsesion');
Route::view('/registrarse','registrarse')->name('rutaregistrarse');

Route::view('/home','home')->name('rutahome');
Route::view('/misemana','miSemana')->name('rutamisemana');
Route::view('/concentracion','concentracion')->name('rutaconcentracion');
Route::view('/memoria','memoria')->name('rutamemoria');
Route::view('/mislogros','misLogros')->name('rutamislogros');


