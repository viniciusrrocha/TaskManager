@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('Sistema.base.alerts')
            <div class="card">
                <div class="card-header">
                    Recados
                    <a href="{!! url('/recados/adicionar') !!}">
                        <button class="btn btn-success float-right"> Adicionar</button>
                    </a>
                </div>
                

                <div class="card-body">
                @if(count($recados) > 0)
          
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Data</th>
                            <th scope="col">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($recados as $rec)
                        <tr>
                            <td>{!! $rec->id!!}</td>
                            <td>{!! substr($rec->titulo,  0, 20) !!}</td>
                            <td>{!! substr($rec->descricao,  0, 40) !!}</td>
                            <td>{!! date("d/m/Y H:i:s", strtotime($rec->data)) !!}</td>
                            <td>
                                @if($rec->status == "A")
                                    Aberto
                                @else
                                    Concluido
                                @endif
                            </td>
                            <td>
                            <button class="btn btn-warning">Alterar</button>
                            <i class="oi oi-pencil"></i>
                            <a href="{!! url('/recados/apagar/'.$rec->id) !!}">
                            <i class="oi oi-trash"></i>
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    
                    </table>
                    <div>
                        {!! $recados->links()!!}
                    </div>
                    
                    @else
                    <h1>Nao ha dados para mostrar, fazer adicionar uma noticia!</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
