<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros</title>
</head>

<body>
    <div>
        <h2>Lista de Livros</h2>
        @foreach ($livros as $livro)
            <p>Título: {{ $livro->titulo }}</p>
            <p>Ano: {{ $livro->ano }}</p>
            <p>Idioma: {{ $livro->idioma }}</p>
            <p>ISBN: {{ $livro->isbn }}</p>
            <hr>
        @endforeach
    </div>
</body>

</html>
