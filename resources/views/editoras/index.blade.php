@extends('layouts.base')

@section('content')

    <section>
        <h2>Lista de Editoras</h2>

        <p><a href="{{ route('editoras.create') }}">Cadastrar nova editora</a></p>
        <hr>

        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif

        @foreach ($editoras as $editora)
            <p>
                {{ $editora->nome }}
                <a href="{{ route('editoras.show', $editora->id) }}">[detalhes]</a>
                <a href="{{ route('editoras.edit', $editora->id) }}">[editar]</a>
            </p>
            <hr>
        @endforeach
    </section>

@endsection
