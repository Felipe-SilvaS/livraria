@extends('layouts.base')
@section('content')
    <section>
        <h1>Lista de Autores</h1>

        <a href="{{ route('autores.create') }}">Cadastrar autor</a>
        <hr>

        <div>
            <form action="{{ route('autores.search') }}" method="POST">
                @csrf
                <p>Buscar</p>
                <input type="text" name="search" id="search" placeholder="Digite a busca">
                <button type="submit">Buscar</button>
            </form>
        </div>

        <hr>
        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif

        @foreach ($autores as $autor)
            <section>
                {{ $autor->nome }}
                <a href="{{ route('autores.show', $autor->id) }}">[detalhes]</a>
                <a href="{{ route('autores.edit', $autor->id) }}">[editar]</a>
            </section>
            <hr>
        @endforeach

        @if (isset($filters))
            {{ $autores->appends($filters)->links() }}
        @else
            {{ $autores->links() }}
        @endif
    </section>
@endsection
