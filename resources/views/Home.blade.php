<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="margin-bottom: 3px">Home</h1>
    <hr>
    <p style="margin: 0"> Olá hoje é aniversário de <b>{{$nome}}</b>ele faz <strong>{{$idade}}</strong> anos.<br> Lique para ele pelo Número: </p>
    <ul  style="list-style: none; margin: 0; padding: 0;">
        @foreach ($telefones as $telefone)
        <li> <b>{{$telefone}}</b> </li>
        @endforeach
    </ul>
</body>
</html>
