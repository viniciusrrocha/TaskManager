@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @include('Sistema.Base.alerts')
            <div class="card">
                <div class="card-header">Novo Recado</div>

                <div class="card-body">
                    <form action="{!! route('recados.adicionar') !!}" method="post">
                        <div class="form-group">
                            @csrf
                            <div class="form-group row">
                                <label for="titulo">Titulo do Recado</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="{!! old('titulo') !!}">
                            </div>
                            <div class="form-group row">
                                <label for="descricao">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao">{!! old('descricao') !!}</textarea>
                            </div>
                            <div class="form-group row">
                                <label for="data">Data</label>
                                <input type="date" value="{!! old('data') !!}" class="form-control" id="data" name="data">
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
