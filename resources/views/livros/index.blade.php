@extends('adminlte::page')

@section('title', 'Livraria | Livros')

@section('content_header')
    <h1>Lista de Livros</h1>
@stop

@section('content')
    <div>
        <div class="col-md-6 px-0">
            <form action="{{ route('livros.search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" id="search" class="form-control" name="search" placeholder="Buscar autor">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif

        <div class="list-group mb-3">
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
