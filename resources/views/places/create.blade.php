<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Criar Local</h1>
    <form action="/store" method="POST">
        @csrf
        <input name="name" placeholder="Nome">
        <input name="description" placeholder="Descrição">
        <input name="address" placeholder="Endereço">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>