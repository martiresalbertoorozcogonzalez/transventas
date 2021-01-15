<?php

use App\Publicacion;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','InicioController')->name('inicio');

Auth::routes(['verify' => true]);



Route::group(['middleware' => ['auth','verified']], function() {

  Route::get('/publicacion/create', 'PublicacionController@create')->name('publicaciones.create');
  Route::post('/publicacion', 'PublicacionController@store')->name('publicaciones.store');
  Route::get('/publicacion/edit', 'PublicacionController@edit')->name('publicaciones.edit');

  //Subir varias imagenes
  Route::post('/imagenes/store', 'ImagenesController@store')->name('imagenes.store');
  Route::post('/imagenes/destroy', 'ImagenesController@destroy')->name('imagenes.destroy');

});


