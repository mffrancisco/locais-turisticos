<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Local</h1>
    <form action="/update/{{ $place->id }}" method="POST">
        @csrf
        <input name="name" value="{{ $place->name }}">
        <input name="description" value="{{ $place->description }}">
        <input name="address" value="{{ $place->address }}">
        <button type="submit">Enviar</button>
    </form>

    <form action="/destroy/{{ $place->id }}" method="POST">
        @csrf
        <button type="submit">Deletar</button>
    </form>
</body>
</html>