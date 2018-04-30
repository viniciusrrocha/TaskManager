<?php

namespace App\Http\Controllers\Sistema\Noticias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sistema\Noticias\Noticia;

class NoticiasController extends Controller
{
    //funcao que exibira os lembretes na tela principal.
    public function site(Noticia $noticia)
    {
        //funcao de consulta ao banco de dabos utilizando a model.
        $noticias = $noticia->index();
        //retornndo para a view principal do sistema os dados cadastrados no banco.
        return view('Sistema.Noticias.site', 
                compact('noticias'));
    }
    public function index(Noticia $noticia)
    {
        $noticias = $noticia->index();
        return view('Sistema.Noticias.index', 
                compact('noticias'));
    }
    public function mostraAdicionar()
    {
        return view('Sistema.Noticias.adicionar');
    }
    public function salvaAdicionar(Noticia $noticia, Request $request)
    {
       // dd($request);
        $noticia = $noticia->adicionar($request);
        //dd($noticia);
        if($noticia['success'])
        {
            return redirect()
                        ->route('noticias.index')
                        ->with('success', $noticia['message']);
        }
        else
        {
            return redirect()
                        ->back()
                        ->with('errors', $noticia['message']);
        }
    }
    public function apagar(Noticia $noticia, $id)
    {
        $noticia = $noticia->apagar($id);
        if($noticia['success'])
        {
            return redirect()
                        ->route('noticias.index')
                        ->with('success', $noticia['message']);
        }
        else
        {
            return redirect()
                        ->back()
                        ->with('errors', $noticia['message']);
        }
    }
    
}
