@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('Sistema.base.alerts')
            <div class="card">
                <div class="card-header">
                    Noticias
                    <a href="{!! url('/noticias/adicionar') !!}">
                        <button class="btn btn-success float-right">+ Adicionar</button>
                    </a>
                </div>
                

                <div class="card-body">
                @if(count($noticias) > 0)
          
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Endereço</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($noticias as $not)
                        <tr>
                            <td>{!! substr($not->id,  0, 16) !!}</td>
                            <td>{!! substr($not->titulo,  0, 20) !!}</td>
                            <td>{!! substr($not->descricao,  0, 40) !!}</td>
                            <td>{!! substr($not->uri,  0, 40)!!}</td>
                            <td>
                            <button class="btn btn-warning">Alterar</button>
                            <a href="{!! url('/noticias/apagar/'.$not->id) !!}">
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    
                    </table>
                    @else
                    <h1>Nao ha dados para mostrar, fazer adicionar uma noticia!</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
