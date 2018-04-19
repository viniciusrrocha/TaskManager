<?php

namespace App\Models\Sistema\Noticias;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table      = "noticias";
    public    $timestamps = false;
    
    public function index()
    {
        $noticias = $this->all();
        return $noticias; 
    }
    public function adicionar($request)
    {
        $noticia            = new $this;
        $noticia->titulo    = $request->titulo;
        $noticia->descricao = $request->descricao;
        $noticia->uri       = $request->uri;
        $noticia->save();

        if($noticia)
            return [
                'success'=>true,
                'message'=>'Noticia Cadastrada com Sucesso!'
            ];
        return [
            'success' =>false,
            'message'=>'Erro do cadastrar noticia!'
        ];
        

    }
    public function apagar($id)
    {
        $noticia =  $this->find($id);
        $noticia->delete();

        if($noticia)
            return [
                'success'=>true,
                'message'=>'Noticia Apagada com Sucesso!'
            ];
        return [
            'success' =>false,
            'message'=>'Erro do Apagar noticia!'
        ];
        

    }
}
