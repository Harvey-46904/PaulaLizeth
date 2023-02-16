<?php

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

Route::get('/', function () {
    return view('PaginaWeb.index');
});
Route::get('/quien-soy', function () {
    return view('PaginaWeb.about');
})->name("quien-soy");

Route::post('/enviar_correo',"UsuariosController@store")->name("enviar_correo");
