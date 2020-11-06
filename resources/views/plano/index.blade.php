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


        <label for="">Custo</label>

        <select class="custom-select" name="custo_id" id="custo">
            <option selected>Choose...</option>

            @foreach ($custos as $item)

            <option value="{{$item->id}}">{{$item->descricao}}</option>

            @endforeach

        </select>
        <!--<button type="submit">Cadastrar</button>!-->


      <label for="">Receita</label>

      <select class="custom-select" name="receita_id" id="receita">
          <option selected>Choose...</option>

          @foreach ($receitas as $item)

          <option value="{{$item->id}}">{{$item->descricao}}</option>

          @endforeach

      </select>

      <button type="submit">Cadastrar</button>

  </form>

  @if(session('success'))
  <h1>{{session('success')}}</h1>
  @endif

  <ul> @foreach ($planos as $item)
      <li>{{$item->nome_conta}}</li>

    @endforeach
    </ul>

</body>
</html>

     <!-- <select class="custom-select" id="receita">
        <option selected>Choose...</option>

        @foreach ($custos as $item)

      <option value="{{$item->id}}">{{$item->nome}}</option>
        @endforeach

      </select>

      <select class="custom-select" id="receita">
        <option selected>Choose...</option>
        @foreach ($receitas as $item)

        <option value="{{$item->id}}">{{$item->nome}}</option>
          @endforeach
      </select>



</body>
</html>!-->
