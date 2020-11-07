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

<form action ="{{route('create-receita')}}" method="POST">

    @csrf
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" class="form-control" placeholder="Descrção...">

        <label for="valor">Velor</label>
        <input type="number" name="valor" class="form-control" placeholder="Valor...">

        <label for="">Cliente</label>
        <select class="custom-select" name="cliente_id" id="cliente">
            <option selected>Choose...</option>

            @foreach ($clientes as $item)

          <option value="{{$item->id}}">{{$item->nome}}</option>
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

                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>IdCliente</th>
                        </thead>

     @foreach ($receitas as $rec)

     <tr>
         <td>{{$rec->descricao}}</td>
         <td>{{$rec->valor}}</td>
         <td>{{$rec->cliente_id}}</td>
        </tr>


      @endforeach
    </table>
    </div>
</div>

</body>
</html>
@stop
