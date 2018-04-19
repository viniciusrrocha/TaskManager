<?php

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
$this::get('/', 'Sistema\Noticias\NoticiasController@site');
$this::group(['namespace'=>'Sistema\Noticias', 'middleware'=>'auth'], function(){
    
    $this::get('/noticias', 'NoticiasController@index')
            ->name('noticias.index');
    $this::get('/noticias/adicionar', 'NoticiasController@mostraAdicionar');
    $this::post('/noticias/adicionar', 'NoticiasController@salvaAdicionar')
            ->name('noticias.adicionar');
    $this::get('/noticias/apagar/{id}', 'NoticiasController@apagar')
            ->name('noticias.delete');
    
});
$this::group(['namespace'=>'Sistema\Tarefas'], function(){
    $this::get('/tarefas', 'TarefasController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
