@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tarefas</div>

                <div class="card-body">
          
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Descricao</th>
                            <th scope="col">status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tarefas as $tarefa)
                        @if($tarefa->status == 'F')
                            <tr class="table-danger">
                                <td>{!! $tarefa->id!!}</td>
                                <td>{!! $tarefa->descricao!!}</td>
                                <td>{!! $tarefa->status!!}</td>
                            </tr>
                        @else
                            <tr class="table-success">
                                <td>{!! $tarefa->id!!}</td>
                                <td>{!! $tarefa->descricao!!}</td>
                                <td>{!! $tarefa->status!!}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
