<?php

namespace App\Models\Sistema\Recados;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Recado extends Model
{
    protected $table      = "recados";
    public    $timestamps = false;
    
    public function site()
    {
        $recados = $this->where('status',"A")
                            ->get();
        return $recados; 
    }
    public function index()
    {
        $recados = $this->paginate(10);
        return $recados; 
    }
    public function salvaAdicionar($request)
    {
        $noticia            = new $this;
        $noticia->user_id   = Auth::user()->id;
        $noticia->titulo    = $request->titulo;
        $noticia->descricao = $request->descricao;
        $noticia->data      = date('Y-m-d');
        $noticia->status    = "A";
        $noticia->save();

        if($noticia)
            return [
                'success'=>true,
                'message'=>'Recado Cadastrada com Sucesso!'
            ];
        return [
            'success' =>false,
            'message'=>'Erro do cadastrar Recado!'
        ];
        

    }
    public function mostraAlterar($id)
    {
        $recado= $this->find($id);
        //dd($recado);
        return $recado; 
    }
    public function salvaAlterar($request)
    {
        $noticia            =  $this::find($request->id);
        $noticia->user_id   = Auth::user()->id;
        $noticia->titulo    = $request->titulo;
        $noticia->descricao = $request->descricao;
        $noticia->data      = date('Y-m-d');
        $noticia->status    = "A";
        $noticia->save();

        if($noticia)
            return [
                'success'=>true,
                'message'=>'Recado Alterado com Sucesso!'
            ];
        return [
            'success' =>false,
            'message'=>'Erro do Alterar Recado!'
        ];
        

    }

    public function concluir($id)
    {
        $recado =  $this->find($id);
        $recado->status = "C";
        $recado->update();

        if($recado)
            return [
                'success'=>true,
                'message'=>'Recado Concluido com Sucesso!'
            ];
        return [
            'success' =>false,
            'message'=>'Erro do Atualizar Recado!'
        ];
        

    }
    public function apagar($id)
    {
        $recado =  $this->find($id);
        $recado->delete();

        if($recado)
            return [
                'success'=>true,
                'message'=>'Recado Apagada com Sucesso!'
            ];
        return [
            'success' =>false,
            'message'=>'Erro do Apagar Recado!'
        ];
        

    }
}
