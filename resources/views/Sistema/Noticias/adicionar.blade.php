@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if(session('erros'))
                <div id="msg" class="alert alert-danger">
                    <p>Deu erro</p>
                </div>
            @endif
                <div class="card-header">Nova Noticia</div>

                <div class="card-body">
                <form action="{!! route('noticias.adicionar') !!}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="titulo">Titulo da Noticia</label>
                        <input type="text" class="form-control" id="titulo" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Example textarea</label>
                        <textarea class="form-control" id="descricao" name="descricao"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="uri">Fonte da Noticia</label>
                        <input type="text" class="form-control" id="uri" name="uri">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
