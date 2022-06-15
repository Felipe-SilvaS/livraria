@extends('adminlte::page')

@section('title', 'Livraria | Detalhes da Editora')

@section('content_header')
    <h1>Dados da {{ $editora->nome }}</h1>
@stop

@section('content')
    <ul class="list group p-0">
        <li class="list-group-item">Local: {{ $editora->nome }}</li>
        <li class="list-group-item">Local: {{ $editora->local }}</li>
        <li class="list-group-item">Site: {{ $editora->site }}</li>
        <li class="list-group-item">Email: {{ $editora->email }}</li>
    </ul>

    <form action="{{ route('editoras.destroy', $editora->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Deletar</button>
    </form>

@endsection
