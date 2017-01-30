@extends('painel.templates.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Titulo: {{$post->titulo}} </h1>
                    <p><strong>Descrição:</strong> {{$post->conteudo}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
