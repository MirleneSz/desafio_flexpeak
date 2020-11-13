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

<form action ="{{route('create-plano')}}" method="POST">
    @csrf

    <div class="form--group">
        <label for="nome_conta">Nome da Conta</label>
        <input type="text" name="nome_conta" class="form-control" placeholder="Nome...">

        <label for="data_pagamebto">Data da Conta</label>
        <input type="date" name="data_pagamento" class="form-control" placeholder="Data...">


        <label for="">Custo</label>

        <select class="custom-select" name="custo_id" id="custo">
            <option selected>Choose...</option>

            @foreach ($custos as $item)

            <option value="{{$item->id}}">{{$item->descricao}}</option>

            @endforeach

        </select>


      <label for="">Receita</label>

      <select class="custom-select" name="receita_id" id="receita">
          <option selected>Choose...</option>

          @foreach ($receitas as $item)

          <option value="{{$item->id}}">{{$item->descricao}}</option>

          @endforeach

      </select>

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

                        <th>Nome da Conta</th>
                        <th>Data do Pagamento</th>
                        <th>IdCusto</th>
                        <th>IdReceita</th>
                    </thead>

   @foreach ($planos as $pla)

   <tr>
       <td>{{$pla->nome_conta}}</td>
       <td>{{$pla->data_pagamento}}</td>
       <td>{{$pla->custo_id}}</td>
       <td>{{$pla->receita_id}}</td>
   </tr>


    @endforeach
                </table>
            </div>
        </div>
</body>
</html>
@stop
