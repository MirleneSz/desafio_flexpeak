<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Cliente</title>
</head>
<body>

<form action ="{{route('create-cliente')}}" method="POST">
    @csrf
        <input type="text" name="nome" id="">
        <input type="email" name="email" id="">
        <input type="text" name="endereco" id="">
        <input type="tel" name="telefone" id="">

        <button type="submit">Cadastrar</button>
    </form>

    @if(session('success'))
    <h1>{{session('success')}}</h1>
    @endif

    <ul> @foreach ($clientes as $item)
        <li>{{$item->nome}}</li>

      @endforeach</ul>

 </body>
</html>
