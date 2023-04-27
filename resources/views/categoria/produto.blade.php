<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Lista de produtos pela categoria</title>
</head>
<body>
    
<div class="container">
    <div class="my-4">
        <a class="btn btn-dark" href="{{route('cat.index')}}">Voltar</a>
    </div>

    <h1 class="text-center mb-4">Produtos da categoria: {{ $categoria->nome }}</h1>

    <ul class="list-group">
        @foreach($produto as $prod)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    ID: {{ $prod->id }}
                </span>
                <span>
                    Nome: {{ $prod->nome }}
                </span>
                <span class="badge bg-primary rounded-pill">R$ {{ $prod->preco }}</span>
                <img src="{{ asset('storage/' . $prod->imagem) }}" alt="{{ $prod->nome }}" width="150" height="100">
            </li>
        @endforeach
    </ul>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<style>

*{
    margin: 0;
    padding: 3px;
}

span, .badge{
    font-size: 17px;
}





</style>

</html>
