<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contato', function () {
// 	return 'Página de Contatos';
// });

// Route::get('empresa', function () {
// 	return 'Página Empresa';
// });

// Route::post('cadastrar/user', function () {
// 	return 'Cadastrando Usuário...';
// });

// Route::match(['post', 'get'], '/match', function () {
// 	return 'Minha rota match!';
// });

// Route::any('any', function () {
// 	return 'Rota do tipo any!';
// });

// Route::get('produto', function () {
// 	return 'Listagem dos Produtos!';
// });

// Route::get('produto/adicionar', function () {
// 	return 'Formulário de add prod!';
// });

// Route::get('produto/editar/{idProduto}', function ($idProduto) {
// 	return "Editar o Produto => {$idProduto}!";
// })
// ->where('idProduto', '[0-9]+');

// Route::get('produto/deletar/{idProduto?}', function ($idProduto = '') {
// 	return "Deletar o produto => {$idProduto}";
// });

// Route::get('produto/{idProduto}/imagem/{idImagem}', function ($idProduto, $idImagem) {
// 	return "Produto => {$idProduto}, e Imagem => {$idImagem}!";
// });

// Route::group(['prefix' => 'painel', 'middleware' => 'my-middleware'], function () {
// 	Route::get('/', function () {
// 		return view('painel.dashboard.index');
// 	});
// 	Route::get('financeiro', function () {
// 		return view('painel.financeiro.index');
// 	});
// 	Route::get('user', function () {
// 		return 'Users do Painel!';
// 	});
// });

// Route::get('/auth/login', function () {
// 	return 'Vaza malandro!';
// });

Route::get('produto', 'ProdutoController@index');
Route::get('produto/create', 'ProdutoController@create');
Route::post('produto/create', 'ProdutoController@store');
Route::get('produto/{idProd}', 'ProdutoController@show');
Route::get('produto/edit/{idProd}', 'ProdutoController@edit');

Route::controller('/carro', 'CarroController');