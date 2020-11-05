<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Plano de Conta</title>
</head>
<body>
<form action ="{{route('create-plano')}}" method="POST">
    @csrf
        <input type="text" name="nome_conta" id="">
        <input type="date" name="data_pagamento" id="">
        <input type="number" name="fornecedor_id" id="">
        <input type="number" name="receita_id" id="">

        <button type="submit">Cadastrar</button>
    </form>

    @if(session('success'))
    <h1>{{session('success')}}</h1>
    @endif

    <ul> @foreach ($planos as $item)
        <li>{{$item->nome}}</li>

      @endforeach</ul>

</body>
</html>
