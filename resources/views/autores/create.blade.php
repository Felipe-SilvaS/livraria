@extends('layouts.base')

@section('content')
    <h2> Cadastrar Autor</h2>
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf

        <div>
            <label for="nome" class="form-label"> Nome: </label>
            <input type="text" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome"
                value="{{ old('nome') }}" aria-describedby="nomeValidationFeedback">
            <div id="nomeValidationFeedback" class="invalid-feedback">{{ $errors->first('nome') }}</div>
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="pais"> Nascionalidade: </label>
            <input type="text" id="pais" name="pais" value="{{ old('pais') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="ano_nasc"> Ano de Nascimento: </label>
            <input type="text" id="ano" name="ano_nasc" value="{{ old('ano_nasc') }}">
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
