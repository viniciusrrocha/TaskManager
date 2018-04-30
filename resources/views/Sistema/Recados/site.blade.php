@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @include('Sistema.base.alerts')
            <div class="card">
                <div class="card-body">
                @if(count($recados) > 0)
                <div class="row">
                    @foreach($recados as $rec)
                      
                       
                            <div class="col-sm-4">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{!! $rec->titulo !!}</h5>
                                    <p class="card-text">{!! $rec->descricao !!}</p>
                                    <p>
                                        <b>Data: </b>
                                        {!! date("d/m/Y H:i:s", strtotime($rec->data)) !!}
                                    </p>
                                    
                                    <a href="{!! url('/recados/'.$rec->id.'/concluido')!!}" class="btn btn-primary">Concluido</a>
                                </div>
                                </div>
                            </div>
                            
                    @endforeach
                    </div>
                @else
                <h1>Nao ha recados para serem exibidos</h1>
                @endif
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
