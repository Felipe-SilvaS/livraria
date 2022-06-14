@extends('adminlte::page')

@section('title', 'Livraria | Info Livro')

@section('content_header')
    <h1>Lista de Livros</h1>
@stop

@section('content')
 <h1>Detalhes do livro {{$livro->titulo}}</h1>
 <ul>
     <li>ISBN {{$livro->isbn}}</li>
     <li>Ano {{$livro->ano}}</li>
     <li>Idioma {{$livro->idioma}}</li>
     <li>Midia</li>
     <li>Nome da mídia: {{$midia->nome}}</li>
     <li>Descrição da mídia: {{$midia->descricao}}</li>
</ul>
<form action="{{route('livros.destroy', $livro->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar o livro {{$livro->titulo}} </button>
</form>

@endsection
