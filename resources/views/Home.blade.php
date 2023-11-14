<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <p> Olá hoje é aniversário de {{$nome}} Ele faz {{$idade}} anos,<br> Lique para ele pelo Número: </p>
    <ul  style="list-style: none;">
        @foreach ($telefones as $telefone)
        <li> {{$telefone}} </li>
        @endforeach
    </ul>
</body>
</html>
