@extends('layouts.base')
@section('content')
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
@endsection
