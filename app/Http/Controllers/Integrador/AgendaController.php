<?php

namespace App\Http\Controllers\Integrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function listar(){
    	return view('sistema.telas.agenda.tarefas');
    }

    public function detalhe($id){
    	return view('sistema.telas.agenda.tarefa');
    }
}
