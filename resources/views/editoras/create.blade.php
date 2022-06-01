@extends('layouts.base')

@section('content')
    <h2> Cadastrar Editora</h2>

    <!-- mostrar erros -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('editoras.store') }}" method="POST">
        @csrf

        <div>
            <label for="nome" class="form-label"> Nome: </label>
            <input type="text" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome"
                value="{{ old('nome') }}" aria-describedby="nomeValidationFeedback">
            <div id="nomeValidationFeedback" class="invalid-feedback">{{ $errors->first('nome') }}</div>
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="local"> Local: </label>
            <input type="text" id="local" name="local" value="{{ old('local') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="site"> Site: </label>
            <input type="text" id="site" name="site" value="{{ old('site') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="email"> Email: </label>
            <input type="text" id="email" name="email" value="{{ old('email') }}">
            <br>
        </div>
        <button type="submit">Enviar</button>
    </form>
@endsection