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


Route::get('/login', ['as'=>'login', 'uses'=>'Admin\UsuarioController@login']);
Route::post('/autenticar', ['as'=>'autenticar', 'uses'=>'Admin\UsuarioController@autenticar']);

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
	
	Route::get('/', ['as'=>'admin.index', 'uses'=>'Admin\UsuarioController@index']);
	Route::get('/logout', ['as'=>'admin.logout', 'uses'=>'Admin\UsuarioController@logout']);

	Route::group(['prefix' => 'integrador', 'middleware' => ['acl'], 'is' => 'integrador'], function(){
		Route::get('projetos', ['as'=>'projetos.integrador', 'uses'=>'Integrador\ProjetoController@listar']);
		Route::get('projetos/{id}/detalhes', ['as'=>'projetos.detalhes', 'uses'=>'Integrador\ProjetoController@detalhes']);

		Route::get('agenda', ['as'=>'agenda', 'uses'=>'Integrador\AgendaController@listar']);
		Route::get('agenda/{id}/detalhe', ['as'=>'agenda.detalhe', 'uses'=>'Integrador\AgendaController@detalhe']);

		Route::get('produtos', ['as'=>'produtos', 'uses'=>'Integrador\ProdutoController@listar']);
		Route::get('produtos/{id}/detalhes', ['as'=>'produtos.detalhes', 'uses'=>'Integrador\ProdutoController@detalhes']);

		Route::get('teste', function(){
			return view('sistema.telas.agenda.tarefas');
		});
		
	});

	Route::group(['prefix' => 'cliente', 'middleware' => 'acl', 'is' => 'cliente'], function() {

		Route::get('integradores', ['as'=>'integradores', 'uses'=>'Integrador\IntegradorController@listar']);
		Route::get('integrador/{id}/detalhes', ['as'=>'integradores.detalhes', 'uses'=>'Integrador\IntegradorController@detalhes']);
	});

	Route::group(['prefix' => 'banco', 'middleware' => 'acl', 'is' => 'banco'], function() {
	    Route::get('projetos', ['as'=>'banco.projetos', 'uses'=>'Integrador\ProjetoController@listar']);
		Route::get('projetos/{id}/detalhes', ['as'=>'banco.projetos.detalhes', 'uses'=>'Integrador\ProjetoController@detalhes']);

		Route::get('integradores', ['as'=>'banco.integradores', 'uses'=>'Integrador\IntegradorController@listar']);
		Route::get('integrador/{id}/detalhes', ['as'=>'banco.integradores.detalhes', 'uses'=>'Integrador\IntegradorController@detalhes']);
	});

	Route::get('projetos', ['as'=>'projetos.integrador', 'uses'=>'Integrador\ProjetoController@listar']);
	Route::get('projetos/{id}/detalhes', ['as'=>'projetos.detalhes', 'uses'=>'Integrador\ProjetoController@detalhes']);

	Route::get('clientes/respondidos', ['as'=>'clientes.respondidos', 'uses'=>'Integrador\ClienteController@respondidos']);
	Route::get('clientes', ['as'=>'banco.clientes', 'uses'=>'Integrador\ClienteController@listar']);
	Route::get('clientes/abertos', ['as'=>'clientes.abertos', 'uses'=>'Integrador\ClienteController@abertos']);
	Route::get('clientes/{id}/aberto/detalhes', ['as'=>'banco.clientes.detalhes', 'uses'=>'Integrador\ClienteController@abertoDetalhes']);
	Route::get('clientes/{id}/respondidos/detalhes', ['as'=>'banco.clientes.detalhes', 'uses'=>'Integrador\ClienteController@respondidoDetalhes']);

});



