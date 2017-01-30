@extends('painel.templates.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Usuários</h1>

                    <h1>{{$nome}}</h1>
                    <ul>
                    @foreach($roles as $role)
                        <li>{{$role}}</li>
                    @endforeach
                    </ul>

                    <ul>
                        @foreach($permissions as $p)
                            <li>{{$p}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
