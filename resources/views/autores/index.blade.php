@extends('layouts.base')
@section('content')
    <section>
        <h1>Lista de Autores</h1>

        <a href="{{ route('autores.create') }}">Cadastrar autor</a>
        <hr>

        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif

        @foreach ($autores as $autores)
            <section>
                {{ $autores->nome }}
                <a href="{{ route('autores.show', $autores->id) }}">[detalhes]</a>
                <a href="{{ route('autores.edit', $autores->id) }}">[editar]</a>
            </section>
            <hr>
        @endforeach
    </section>
@endsection
