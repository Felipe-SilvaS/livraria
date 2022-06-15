@extends('adminlte::page')

@section('title', 'Livraria | Atualizar dados de Autor')

@section('content_header')
    <h1>Atualizar dados de {{ $autor->nome }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('autores.update', $autor->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group col-8 px-0">
                    <label for="nome" class="font-weight-normal">Nome: </label>
                    <input type="text" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"
                        name="nome" value="{{ $autor->nome }}" aria-describedby="nomeValidationFeedback">
                    <div id="nomeValidationFeedback" class="invalid-feedback">
                        <strong>{{ $errors->first('nome') }}</strong>
                    </div>
                </div>

                <div class="form-group col-8 px-0">
                    <label for="pais" class="font-weight-normal"> Nacionalidade: </label>
                    <input type="text" id="pais" class="form-control {{ $errors->has('pais') ? 'is-invalid' : '' }}"
                        name="pais" value="{{ $autor->pais }}" aria-describedby="paisInvalideFeedback">
                    <div id="paisInvalidFeedback" class="invalid-feedback">
                        <strong>{{ $errors->first('pais') }}</strong>
                    </div>
                </div>

                <div class="form-group col-md-8 px-0">
                    <label for="ano_nasc" class="font-weight-normal"> Ano de Nascimento: </label>
                    <input type="text" id="ano" class="form-control {{ $errors->has('ano_nasc') ? 'is-invalid' : '' }}"
                        name="ano_nasc" value="{{ $autor->ano_nasc }}" aria-describedby="ano_nascInvalideFeedback">
                    <div id="ano_nascInvalidFeedback" class="invalid-feedback">
                        <strong>{{ $errors->first('ano_nasc  ') }}</strong>
                    </div>
                </div>

                <div class="form-group col-8 px-0">
                    <label for="area" class="font-weight-normal">Área: </label>
                    <input type="text" id="area" class="form-control {{ $errors->has('area') ? 'is-invalid' : '' }}"
                        name="area" value="{{ $autor->area }}" aria-describedby="areaInvalideFeedback">
                </div>
                <div class="areaInvalideFeedback">
                    <strong>{{ $errors->first('area') }}</strong>
                </div>
                <div class="col-12 px-0">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
