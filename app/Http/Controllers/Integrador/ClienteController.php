<?php

namespace App\Http\Controllers\Integrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    public function respondidos(){
    	return view('sistema.tabelas.clientes.clientes-respondidos');
    }

    public function abertos(){
    	return view('sistema.tabelas.clientes.clientes-abertos');
    }

    public function respondidoDetalhes(){
    	return view('sistema.telas.clientes.clientes-abertos')
    			->with('status', 'Em produção');
    }

    public function abertoDetalhes(){
    	return view('sistema.telas.clientes.clientes-respondidos')
    			->with('status', 'Em espera');
    }

    public function listar(){
    	return view('sistema.tabelas.clientes.clientes');
    }
}
