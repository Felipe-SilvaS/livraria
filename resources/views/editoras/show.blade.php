@extends('layouts.base')

@section('content')
<h1>Dados do autor {{$editora->nome}}</h1>
 <ul>
     <li>Nacionalidade {{$editora->local}}</li>
     <li>Ano de Nascimento {{$editora->site}}</li>
     <li>Área {{$editora->email}}</li>
</ul>
<form action="{{route('editoras.destroy', $editora->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar dados de {{$editora->nome}} </button>
</form>

@endsection
