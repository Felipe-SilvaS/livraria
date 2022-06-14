@extends('adminlte::page')

@section('title', 'Livraria | Cadastrar Autor')

@section('content_header')
    <h1>Cadastro de Autor</h1>
@stop

@section('content')
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome" class="form-label"> Nome: </label>
            <input type="text" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome"
                value="{{ old('nome') }}" aria-describedby="nomeInvalidFeedback">
            <div id="nomeInvalidFeedback" class="invalid-feedback">
                <strong>{{ $errors->first('nome') }}</strong>
            </div>
        </div>

        <div class="form-group">
            <label for="pais"> Nascionalidade: </label>
            <input type="text" id="pais" class="form-control {{ $errors->has('pais') ? 'is-invalid' : '' }}" name="pais"
                value="{{ old('pais') }}" aria-describedby="paisInvalidFeedback">
            <div id="paisInvalidFeedback" class="invalid-feedback">
                <strong>{{ $errors->first('pais') }}</strong>
            </div>
        </div>

        <div class="form-group">
            <label for="ano_nasc"> Ano de Nascimento: </label>
            <input type="text" id="ano" class="form-control {{ $errors->has('ano_nasc') ? 'is-invalid' : '' }}"
                name="ano_nasc" value="{{ old('ano_nasc') }}" aria-describedby="ano_nascInvalidFeedback">
            <div id="ano_nascInvalidFeedback" class="invalid-feedback">
                <strong>{{ $errors->first('ano_nasc') }}</strong>
            </div>
        </div>

        <div class="form-group">
            <label for="area"> Área: </label>
            <input type="text" id="area" class="form-control {{ $errors->has('area') ? 'is-invalid' : '' }}" name="area"
                value="{{ old('area') }}" aria-describedby="areaInvalidFeedback">
            <div id="areaInvalidFeedback" class="invalid-feedback">

            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar <i class="fas fa-arrow-circle-right ml-1"></i></button>
    </form>
@endsection
