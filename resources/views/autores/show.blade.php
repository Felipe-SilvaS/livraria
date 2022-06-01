@extends('layouts.base')

@section('content')
<h1>Dados do autor {{$autor->nome}}</h1>
 <ul>
     <li>Nacionalidade {{$autor->pais}}</li>
     <li>Ano de Nascimento {{$autor->ano_nasc}}</li>
     <li>Área {{$autor->area}}</li>
</ul>
<form action="{{route('autores.destroy', $autor->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar dados de {{$autor->nome}} </button>
</form>

@endsection
