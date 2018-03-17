<?php

namespace App\Http\Controllers\Integrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetoController extends Controller
{
    public function listar(){
    	return view('sistema.tabelas.projetos');
    }

    public function detalhes($id){
    	return view('sistema.telas.projeto');
    }
}
