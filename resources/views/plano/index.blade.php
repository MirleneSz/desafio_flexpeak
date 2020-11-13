@extends('home')
@section('conteudo')
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js "> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js "> </script>

</head>

<body>

<form action ="{{route('create-plano')}}" method="POST">
    @csrf

    <div class="form--group">
        <label for="nome_conta">Nome da Conta</label>
        <input type="text" name="nome_conta" class="form-control" placeholder="Nome...">

        <label for="data_pagamebto">Data da Conta</label>
        <input type="date" name="data_pagamento" class="form-control" placeholder="Data...">


        <div class="row">

            <div class="form-group">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <label for="">Custo</label>
                <select class="form-control" name="custo_valor" id="custo">
                    <option selected>Choose...</option>

                    @foreach ($custos as $item)

                    <option value="{{$item->valor}}">{{$item->descricao}}</option>

                    @endforeach

                </select>
                </div>

            </div>

        </div>

       <div class="row">
        <div class="form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <label for="">Receita</label>

          <select class="form-control" name="receita_valor" id="receita">
          <option selected>Choose...</option>

          @foreach ($receitas as $item)

          <option value="{{$item->valor}}">{{$item->descricao}}</option>

          @endforeach

      </select>

        </div>
        </div>

        </div>
        <div class="row">
        <div class="form-group">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <label for="">Saldo</label>
                <input class="form-control" name="saldo" value="" id="saldo" >

            </div>
        </div>
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
                <table class="table table-striped table-bordered table-condensed table-hover text-center">
                    <thead>

                        <th>Nome da Conta</th>
                        <th>Data do Pagamento</th>
                        <th>Entrada</th>
                        <th>Saída</th>
                        <th>Saldo R$</th>
                    </thead>

   @foreach ($planos as $pla)

   <tr>
       <td>{{$pla->nome_conta}}</td>
       <td>{{$pla->data_pagamento}}</td>
       <td>{{$pla->receita_valor}}</td>
       <td>{{$pla->custo_valor}}</td>
       <td>{{$pla->saldo}}</td>


   </tr>


    @endforeach
                </table>
            </div>
        </div>

<script>

 function saldo() {
   let saldo = 0;

    let receita = $('#receita').val();
    let custo  = $('#custo').val();

    saldo = (receita - custo);

     $('#saldo').val(saldo);


    }

     $('select').change(saldo);
     saldo();



</script>


</body>
</html>
@stop
