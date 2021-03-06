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
$this::get('/', 'Sistema\Recados\RecadosController@site')->name('recados.site');
$this::group(['namespace'=>'Sistema\Recados', 'middleware'=>'auth'], function(){
    
        $this::get('/recados', 'RecadosController@index')
                ->name('recados.index');
        $this::get('/recados/adicionar', 'RecadosController@mostraAdicionar');
        $this::post('/recados/adicionar', 'RecadosController@salvaAdicionar')
                ->name('recados.adicionar');
        $this::get('/recados/alterar/{id}', 'RecadosController@mostraAlterar');
        $this::post('/recados/alterar', 'RecadosController@salvaAlterar')
                ->name('recados.alterar');
        $this::get('/recados/{id}/concluido', 'RecadosController@concluir')
                ->name('recados.concluir');
        $this::get('/recados/apagar/{id}', 'RecadosController@apagar')
            ->name('recados.apagar');
    
});
$this::group(['namespace'=>'Sistema\Tarefas'], function(){
    $this::get('/tarefas', 'TarefasController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
