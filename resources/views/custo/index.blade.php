<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
<form action ="{{route('create-custo')}}" method="POST">
    @csrf
        <input type="text" name="descricao" id="">
        <input type="text" name="valor" id="">

        <label for="">Fornecedor</label>

        <select class="custom-select" name="fornecedor_id" id="fornecedor">
            <option selected>Choose...</option>

            @foreach ($fornecedores as $item)

          <option value="{{$item->id}}">{{$item->nome}}</option>
            @endforeach

          </select>

        <button type="submit">Cadastrar</button>
    </form>

    @if(session('success'))
    <h1>{{session('success')}}</h1>
    @endif

    <ul> @foreach ($custos as $item)
        <li>{{$item->descricao}}</li>

      @endforeach</ul>

</body>
</html>
