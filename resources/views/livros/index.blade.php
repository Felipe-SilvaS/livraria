@extends('layouts.base')
@section('content')
    <div>
        <h2>Lista de Livros</h2>

        <p><a href="{{route('livros.create')}}">Inserir novo Livro</a></p>
        <hr>

        @if ( session('message') )
        <div>
            {{ session('message') }}
        </div>
        @endif

        @foreach ($livros as $livro)
        <p>
            {{$livro->titulo}}
            <a href="{{route('livros.show', $livro->id)}}">[detalhes]</a>
            <a href="{{route('livros.edit', $livro->id)}}">[editar]</a>
            </p>
            <hr>
        @endforeach
    </div>
@endsection
