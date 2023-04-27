<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Editar produto</title>
</head>

<body>
    <div class="container">
        <h1>Editar produto</h1>
        <hr>

        <form method="POST" action="{{ route('prod.update', $produto->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-select">
                    <option value="">Selecione uma categoria</option>
                    @foreach ($cat as $categoria)
                        <option value="{{$categoria->id}}">
                            {{$categoria->nome}}
                        </option>

                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}">
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" value="{{ $produto->preco }}">
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="imagem" name="imagem">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('prod.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

<style>

*{
    margin: 0;
    padding: 5px;
}



</style>
</html>
