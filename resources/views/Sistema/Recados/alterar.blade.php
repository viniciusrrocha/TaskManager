@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @include('Sistema.Base.alerts')
            <div class="card">
                <div class="card-header">Alterção de Recado</div>

                <div class="card-body">
                    <form action="{!! route('recados.alterar') !!}" method="post">
                        <div class="form-group">
                            @csrf
                            <input type="hidden" class="form-control" name="id" value="{!! $recado->id !!}">
                            <div class="form-group row">
                                <label for="titulo">Titulo do Recado</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="{!! $recado->titulo !!}">
                            </div>
                            <div class="form-group row">
                                <label for="descricao">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao">{!! $recado->descricao !!}</textarea>
                            </div>
                            <div class="form-group row">
                                <label for="data">Data</label>
                                <input type="date" value="{!! $recado->data !!}" class="form-control" id="data" name="data">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
