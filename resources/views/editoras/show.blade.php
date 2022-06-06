@extends('layouts.base')

@section('content')
<h1>Dados da editora {{$editora->nome}}</h1>
 <ul>
     <li>Local:  {{$editora->local}}</li>
     <li>Site: {{$editora->site}}</li>
     <li>Email: {{$editora->email}}</li>
</ul>
<form action="{{route('editoras.destroy', $editora->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar dados de {{$editora->nome}} </button>
</form>

@endsection
