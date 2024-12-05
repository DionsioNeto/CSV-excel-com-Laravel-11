<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Dionísio Neto">
    <meta name="description" content="Página inicial do sistema">

    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body{
            font-family: system-ui;
            background: black;
            color: #fff;
        }
    </style>
</head>
<body>
    @session('success')
        <p>{{ $value }}</p>
    @endsession

    @session('error')
        {!! $value !!}
    @endsession

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p> {{ $error }} </p>
        @endforeach
    @endif

    <h1>Testando Arquivo CSV (Excel) </h1>

    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="" id="file" accept=".csv">
        <button type="submit">
            Importar
        </button>
    </form>

    @if (count($user) == 0 )
        <p>Ainda sem algum item cadastrado...</p>
    @else
        @foreach ($user as $users)
        
        {{ $users->id}} | 
        {{ $users->name}} | 
        {{ $users->email}} | 
        <a href="/ver/{{ $users->name }}">Ver</a> | 
        <a href="/Editar/{{ $users->name }}">Editar</a>  | 
        <a href="/deletar/{{ $users->id}}">Deletar</a> <br>

        @endforeach
    @endif



</body>
</html>

