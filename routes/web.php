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
    return view('layouts/login');
});

Route::get('/cadastro', 'CadastroController@index')->name('cadastro');
Route::post('/cadastro', 'CadastroController@create')->name('cadastro');

Route::get('/cadastro-livro', 'LivroController@index')->name('livro');
Route::post('/cadastro-livro', 'LivroController@create')->name('livro');
