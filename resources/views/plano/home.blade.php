<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Sys Ongs</title>
</head>
<body>
       <h1> test </h1>

      <ul> @foreach ($fornecedores as $item)
        <li>$item</li>

      @endforeach</ul>

      <ul> @foreach ($clientes as $item)
        <li>$item</li>

        @endforeach</ul>

        <ul> @foreach ($planos as $item)
            <li>$item</li>

            @endforeach</ul>
</body>
</html>
