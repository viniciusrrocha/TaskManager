<?php

namespace App\Http\Controllers\Sistema\Recados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sistema\Recados\Recado;
use App\Http\Requests\Sistema\Recados\RecadosFormRequest;

class RecadosController extends Controller
{
    //funcao que exibira os lembretes na tela principal.
    public function site(Recado $recado)
    {
        //funcao de consulta ao banco de dabos utilizando a model.
        $recados = $recado->site();
        //retornndo para a view principal do sistema os dados cadastrados no banco.
        return view('Sistema.Recados.site', 
                compact('recados'));
    }
    public function index(Recado $recado)
    {
        $recados = $recado->index();
        return view('Sistema.Recados.index', 
                compact('recados'));
    }
    public function mostraAdicionar()
    {
        return view('Sistema.Recados.adicionar');
    }
    public function salvaAdicionar(Recado $recado, RecadosFormRequest $request)
    {
       // dd($request);
        $recado = $recado->adicionar($request);
        //dd($recado);
        if($recado['success'])
        {
            return redirect()
                        ->route('recados.index')
                        ->with('success', $recado['message']);
        }
        else
        {
            return redirect()
                        ->back()
                        ->with('erros', $recado['message']);
        }
    }
    public function concluir(Recado $recado, $id)
    {
        $recado = $recado->concluir($id);
        if($recado['success'])
        {
            return redirect()
                        ->route('recados.site')
                        ->with('success', $recado['message']);
        }
        else
        {
            return redirect()
                        ->back()
                        ->with('erros', $recado['message']);
        }
    }
    public function apagar(Recado $recado, $id)
    {
        $recado = $recado->apagar($id);
        if($recado['success'])
        {
            return redirect()
                        ->route('recados.index')
                        ->with('success', $recado['message']);
        }
        else
        {
            return redirect()
                        ->back()
                        ->with('erros', $recado['message']);
        }
    }
}
