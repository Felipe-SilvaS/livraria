@extends('adminlte::page')

@section('title', 'Livraria | Detalhes do Autor')

@section('content_header')
    <h1>Dados do {{ $autor->nome }}</h1>
@stop

@section('content')
    <ul class="list group p-0">
        <li class="list-group-item">Nome: {{ $autor->nome }}</li>
        <li class="list-group-item">Nacionalidade: {{ $autor->pais }}</li>
        <li class="list-group-item">Ano de Nascimento: {{ $autor->ano_nasc }}</li>
        <li class="list-group-item">Área: {{ $autor->area }}</li>
    </ul>

    <form action="{{ route('autores.destroy', $autor->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary"> Deletar </button>
    </form>

@endsection
