@extends('adminlte::page')

@section('title', 'Livraria | Cadastro de Livro')

@section('content_header')
    <h1>Cadastrar Livro</h1>
@stop

@section('content')
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

    <form action="{{ route('livros.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="isbn"> ISBN: </label>
            <input type="text" id="isbn" name="isbn" value="{{ old('isbn') }}">
            <br>
        </div>

        <div style="margin-top: 10px; margin-bottom:10px">
            <label for="capa"> Capa: </label>
            <input type="file" id="capa" name="capa">
            <br>
        </div>

        <div class="input-group col-md-3 px-0">
            <div class="input-group-prepend">
                <label for="idEditora" class="input-group-text font-weight-normal">Editoras</label>
            </div>
            <select name="" id="" class="form-control">
                <option value=""></option>
            </select>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection
