<?php

namespace App\Http\Controllers\Integrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function listar()
    {
    	return view('sistema.tabelas.produtos');
    }
    public function detalhes($id)
    {
    	return view('sistema.telas.produtos');
    }
}
