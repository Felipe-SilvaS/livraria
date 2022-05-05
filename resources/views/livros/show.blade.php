@extends('layouts.base')

@section('content')
 <h1>Detalhes do livro {{$livro->titulo}}</h1>
 <ul>
     <li>ISBN {{$livro->isbn}}</li>
     <li>Ano {{$livro->ano}}</li>
     <li>Idioma {{$livro->idioma}}</li>
</ul>
<form action="{{route('livros.destroy', $livro->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar o livro {{$livro->titulo}} </button>
</form>

@endsection
