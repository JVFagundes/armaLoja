<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Teste</title>
</head>
<center>
<br>
<a class="btn btn-primary" href="{{route('usuarios.index')}}">Lista de usuários</a>
<h1>Adicionar novo usuário</h1>

    <form action="{{route('usuarios.store')}}" method="POST">

    @csrf

    <label for="name">Nome:</label>
    <input type="text" id="name" name="name">
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password">
    <br><br>

  <button class="btn btn-primary">Enviar</button>
    
    </form>
<center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<body>