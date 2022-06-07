@extends('layouts.base')
@section('content')
    <h1>Editar o livro {{ $livro->titulo }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <form action="{{ route('livros.update', $livro->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div style="margin-top: 10px; margin-bottom:10px">
                <label for="titulo"> Titulo: </label>
                <input type="text" id="titulo" name="titulo" value="{{ $livro->titulo }}">
                <br>
            </div>

            <div style="margin-top: 10px; margin-bottom:10px">
                <label for="ano"> Ano: </label>
                <input type="text" id="ano" name="ano" value="{{ $livro->ano }}">
                <br>
            </div>

            <div style="margin-top: 10px; margin-bottom:10px">
                <label for="idioma"> Idioma: </label>
                <input type="text" id="idioma" name="idioma" value="{{ $livro->idioma }}">
                <br>
            </div>

            <div style="margin-top: 10px; margin-bottom:10px">
                <label for=""> ISBN: </label>
                <input type="text" id="isbn" name="isbn" value="{{ $livro->isbn }}">
                <br>
            </div>

            <div style="margin-top: 10px; margin-bottom:10px">
                <img src="{{ url("storage/{$livro->capa}") }}" alt="{{ $livro->titulo }}" style="max-width:100px">
            </div>

            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection
