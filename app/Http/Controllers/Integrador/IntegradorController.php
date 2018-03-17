<?php

namespace App\Http\Controllers\Integrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntegradorController extends Controller
{
    public function listar(){
    	return view('sistema.telas.integradores.lista');
    }

    public function detalhes($id){
    	return view('sistema.telas.integradores.integrador');
    }
}
