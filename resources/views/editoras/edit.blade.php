@extends('adminlte::page')

@section('title', 'Livraria | Atualizar dados de Autor')

@section('content_header')
    <h1>Atualizar dados de {{ $editora->nome }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('editoras.update', $editora->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group col-8 px-0">
                    <label for="nome" class="font-weight-normal"> Nome: </label>
                    <input type="text" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"
                        name="nome" value="{{ $editora->nome }}" aria-describedby="nomeValidationFeedback">
                    <div id="nomeInvalidFeedback" class="invalid-feedback">
                        <strong>{{ $errors->first('nome') }}</strong>
                    </div>
                </div>

                <div class="form-group col-8 px-0">
                    <label for="local" class="font-weight-normal"> Local: </label>
                    <input type="text" id="local" class="form-control {{ $errors->has('local') ? 'is-invalid' : '' }}"
                        name="local" value="{{ $editora->local }}" aria-describedby="localInvalidFeedback">
                    <div id="localInvalidFeedback" class="invalid-feedback">
                        <strong>{{ $errors->first('local') }}</strong>
                    </div>
                </div>

                <div class="form-group col-8 px-0">
                    <label for="site" class="font-weight-normal"> Site: </label>
                    <input type="text" class="form-control {{ $errors->has('site') ? 'is-invalid' : '' }}" id="site"
                        name="site" value="{{ $editora->site }}" aria-describedby="editoraInvalidFeedback">
                    <div id="siteInvalidFeedback" class="invalid-feedback">
                        <strong>{{ $errors->first('site') }}</strong>
                    </div>
                </div>

                <div class="form-group col-8 px-0">
                    <label for="email" class="font-weight-normal"> Email: </label>
                    <input type="text" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        name="email" value="{{ $editora->email }}" aria-describedby="emailInvalidFeedback">
                    <div id="emailInvalidFeedback" class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                </div>

                <div class="col-12 px-0">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        @endsection
    </div>
</div>
