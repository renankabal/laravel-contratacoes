<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Validação CSRF
Route::when('*', 'csrf', array('post'));

Route::get('/', 'LoginController@getEntrar');
Route::post('/entrar', 'LoginController@postEntrar');
Route::get('sair', 'LoginController@getSair');

// Verifica se o usuário está logado
Route::group(array('before' => 'auth'), function()
{
    // Rota da home de administracao do sistema
	Route::get('/home', 'HomeController@home');
	
    // Rota da home de administracao do sistema
	Route::group(array('prefix' => 'home'), function () {

	    Route::resource('/pessoas', 'PessoasController');
	    Route::resource('/contratos', 'ContratosController');

	    // Cria contrato
	    Route::get('/contratos/{pessoa_id}/create', 'ContratosController@createContrato');
	    Route::post('/contratos/{pessoa_id}/create', 'ContratosController@storeContrato');    

	});

});