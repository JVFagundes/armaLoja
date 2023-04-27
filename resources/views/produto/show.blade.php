<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Mostrar produto</title>
</head>
<body>
    
<div class="container">
    <div class="my-4">
        <a class="btn btn-dark" href="{{route('prod.index')}}">Voltar</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <span>ID: {{ $produto->id }}</span>
                </li>
                <li class="list-group-item">
                    <span>ID da categoria pertencente: {{ $produto->categoria_id }}</span>
                </li>
                <li class="list-group-item">
                    <span>Nome: {{ $produto->nome }}</span>
                </li>
                <li class="list-group-item">
                    <span>Preço: R${{ $produto->preco }}</span>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="img-fluid">
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

<style>

*{
    margin: 0;
    padding: 5px;
}

span{
    font-size: 20px;
}

</style>
</html>
