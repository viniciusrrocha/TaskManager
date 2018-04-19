@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                @if(count($noticias) > 0)
                    @foreach($noticias as $not)
                        <div class="alert alert-success" role="alert">
                            <h1 class="alert-heading">{!! $not->titulo !!}</h1>
                            <p class="mb-0">
                                {!! $not->descricao !!}
                                <a href="{!! $not->uri !!}"> Saiba Mais...</a>
                            </p>
                        </div>
                    @endforeach
                @else
                <h1>Nao ha noticias</h1>
                @endif
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
