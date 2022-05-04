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

        <p>Lista de Livros</p>
        @foreach ($livros as $livro)
        <p>
            {{$livro->titulo}}
            <a href="{{route('livros.show', $livro->id)}}"> detalhes</a>
            </p>
            <hr>
        @endforeach
    </div>
@endsection
