<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memoriaController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/','index')->name('rutaprincipal');
Route::view('/planes','planes')->name('rutaplanes');
Route::view('/preguntas','preguntasf')->name('rutapreguntas');

Route::view('/iniciarsesion','iniciarSesion')->name('rutainiciarsesion');
Route::view('/registrarse','registrarse')->name('rutaregistrarse');

// Route::view('/home','home')->name('rutahome');
Route::view('/misemana','miSemana')->name('rutamisemana');
Route::view('/concentracion','concentracion')->name('rutaconcentracion');
//Route::view('/memoria','memoria')->name('rutamemoria'); -> Es la que estoy trabajando en CRUD (samuel) la ruta  nueva esta abajo
Route::view('/mislogros','misLogros')->name('rutamislogros');



//Nuevas rutas para CRUD (samuel)
Route::get('/memoria',[memoriaController::class,'index'])->name('rutamemoria');
Route::post('/memoria/insert',[memoriaController::class,'store'])->name('rutainsertconjunto');


