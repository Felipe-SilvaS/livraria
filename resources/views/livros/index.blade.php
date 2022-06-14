@extends('adminlte::page')

@section('title', 'Livraria | Livros')

@section('content_header')
    <h1>Lista de Livros</h1>
@stop

@section('content')
    <div>
        <p><a href="{{ route('livros.create') }}">Inserir novo Livro</a></p>
        <hr>

        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif

        @include('layouts.buscas.search')


        <div class="mt-3">
            @foreach ($livros as $livro)
                <p>
                    {{ $livro->titulo }}
                    <a href="{{ route('livros.show', $livro->id) }}">[detalhes]</a>
                    <a href="{{ route('livros.edit', $livro->id) }}">[editar]</a>
                </p>
                <hr>
            @endforeach
        </div>

        <!-- Paginação -->
        @if (isset($filters))
            {{ $livros->appends($filters)->links() }}
        @else
            {{ $livros->links() }}
        @endif

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
