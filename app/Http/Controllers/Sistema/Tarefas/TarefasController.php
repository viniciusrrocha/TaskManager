<?php

namespace App\Http\Controllers\Sistema\Tarefas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Sistema\Tarefas\Tarefa;

class TarefasController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tarefa $tarefa)
    {
        $tarefas = $tarefa->index();
        //dd($tarefas);
        return view('Sistema.Tarefas.index', compact('tarefas'));
    }
}
