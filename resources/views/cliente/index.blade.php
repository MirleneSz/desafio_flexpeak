@extends('home')
@section('conteudo')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

    <form action ="{{route('create-cliente')}}" method="POST">

        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome...">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="E-mail...">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" class="form-control" placeholder="Endereço...">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" class="form-control" placeholder="Telefone...">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
        </form>


        @if(session('success'))
        <h1>{{session('success')}}</h1>
        @endif

<div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>

                            <th>Nome</th>
                            <th>E-Mail</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                        </thead>
                       @foreach ($clientes as $cli)
                        <tr>

                            <td>{{ $cli->nome}}</td>
                            <td>{{$cli->email}}</td>
                            <td>{{ $cli->endereco}}</td>
                            <td>{{ $cli->telefone}}</td>

                            <td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

</body>
</html>
@stop
