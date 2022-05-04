@extends('layouts.base')

@section('content')
    <h2> Cadastar Livro</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('livro.store') }}" method="POST">
        @csrf
        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="titulo"> Titulo: </label>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="ano"> Ano: </label>
            <input type="text" id="ano" name="ano" value="{{ old('ano') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="idioma"> Idioma: </label>
            <input type="text" id="idioma" name="idioma" value="{{ old('idioma') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for=""> ISBN: </label>
            <input type="text" id="isbn" name="isbn" value="{{ old('isbn') }}">
            <br>
        </div>

        <button type="submit">Enviar</button>
    </form>
@endsection
