<?php

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'LoginController@index');

$router->group(['middleware' => 'login'], function () use ($router) {
	$router->get('/login', 'LoginController@index');
	$router->post('/logar', 'LoginController@logar');
	$router->get('/sair', 'LoginController@sair');
});

$router->group(['middleware' => 'logado'], function () use ($router) {
	$router->get('/vendas', 'VendaController@index');
	$router->get('/vendas/{id}', 'VendaController@detalhe');
	$router->get('/vendas/gerarPdf/{id}', 'VendaController@gerarPdf');

	$router->get('/produtos', 'ProdutoController@index');
	$router->get('/produtos/novo', 'ProdutoController@cadastro');
	$router->get('/produtos/editar/{id}', 'ProdutoController@cadastro');
});