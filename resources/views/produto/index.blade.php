<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Index produtos</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size: 25px">Loja de armas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="font-size: 23px">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/" style="font-size: 20px">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px">
              Opções
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="{{route('cat.index')}}" style="font-size: 17px">Categoria</a></li>
              <li><a class="dropdown-item" href="{{route('prod.index')}}" style="font-size: 17px">Produto</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<center>
<main>
    <h1>Lista produtos</h1>
    <div class="my-4">
    <a class="btn btn-dark" href="{{route('prod.create')}}">Adicionar novo produto</a>
    </div>
    <br><br>

<ul class="list-group">
    @foreach ($prod as $produto)
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <span>
    {{$loop->iteration}}
      </span>
      <span>
    ID: {{$produto->id}} 
    </span>
    <a class="btn btn-primary" href="{{route('prod.show', $produto->id)}}">Ver produto</a>
    <a class="btn btn-primary" href="{{route('prod.edit', $produto->id)}}">Editar produto</a>
    <form action="{{route('prod.destroy', $produto->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Apagar produto</button>
    </form>
    </li>  
    @endforeach
</ul>
@if(session('bueras'))
    <div class="alert alert-primary">
        {{ session('bueras') }}
    </div>
@endif

</main>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<style>

*{
    margin: 0;
    padding: 10px;
}

body{
    background-color: #fff;
    color: #1C1C1C;
}

main{
    margin-top: 100px;
}

span{
    font-size: 20px;
}

</style>
</html>