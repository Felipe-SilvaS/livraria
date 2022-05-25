@extends('layouts.base')

@section('content')
    <h2> Editar dados do {{ $autor->nome }}</h2>
    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <label for="nome" class="form-label"> Nome: </label>
            <input type="text" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome"
                value="{{ $autor->nome }}" aria-describedby="nomeValidationFeedback">
            <div id="nomeValidationFeedback" class="invalid-feedback"><strong>{{ $errors->first('nome') }}</strong></div>
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="pais"> Nascionalidade: </label>
            <input type="text" id="pais" name="pais" value="{{ $autor->pais}}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="ano_nasc"> Ano de Nascimento: </label>
            <input type="text" id="ano" name="ano_nasc" value="{{ $autor->ano_nasc }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="area"> Área: </label>
            <input type="text" id="area" name="area" value="{{ $autor->area }}">
            <br>
        </div>
        <button type="submit">Enviar</button>
    </form>
@endsection