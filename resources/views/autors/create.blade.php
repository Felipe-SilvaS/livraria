@extends('layouts.base')

@section('content')
    <h2> Cadastrar Autor</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('autors.store') }}" method="POST">
        @csrf
        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="nome"> Titulo: </label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="pais"> Pais: </label>
            <input type="text" id="pais" name="pais" value="{{ old('pais') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="ano"> Ano: </label>
            <input type="text" id="ano" name="ano" value="{{ old('ano') }}">
            <h4>{{ $errors->first('ano_nasc')  }}</h4>
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="area"> Área: </label>
            <input type="text" id="area" name="area" value="{{ old('area') }}">
            <br>
        </div>

        <button type="submit">Enviar</button>
    </form>
@endsection
