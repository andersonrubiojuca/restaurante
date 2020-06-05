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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'RestaController@index');
Route::get('/lista', 'RestaController@lista');
Route::view('/adicionar', 'adicionar');
Route::post('/adicionar', 'RestaController@adicionar');
Route::get('/deletar/{nome}', 'RestaController@deletar');
Route::get('/editar/{nome}', 'RestaController@editar');
Route::post('editar', 'RestaController@editado');
Route::view('/registrar', 'registrar');
Route::post('/registrar', 'RestaController@registrar');