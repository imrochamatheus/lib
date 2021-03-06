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

Route::get('/', 'LoginController@index')->name('login');
Route::post('/', 'LoginController@autenticar')->name('login');
Route::get('/logout', 'LoginController@sair')->name('logout');

Route::prefix('auth')->middleware('autenticacao')->group(function(){

    Route::prefix('on')->middleware('autenticacao')->group(function(){

        Route::get('/dashboard', 'FuncionarioController@index')->name('auth.on.dashboard');

        Route::get('/cadastro', 'CadastroController@index')->name('auth.on.cadastro');
        Route::post('/cadastro', 'CadastroController@create')->name('auth.on.cadastro');

        Route::get('/cadastro-livro', 'LivroController@index')->name('auth.on.livro');
        Route::post('/cadastro-livro', 'LivroController@create')->name('auth.on.livro');

        Route::get('/emprestimo/{erro?}', 'EmprestimoController@index')->name('auth.on.emprestimo');
        Route::post('/emprestimo', 'EmprestimoController@create')->name('auth.on.emprestimo');

    });
    Route::prefix('estudante')/*->middleware('')*/->group(function(){
        Route::get('/painel', 'EstudanteController@index')->name('auth.estudante.painel');
    });
});
