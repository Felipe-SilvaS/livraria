@extends('adminlte::page')

@section('title', 'Livraria | Autores')

@section('content_header')
    <h1>Autores Cadastrados</h1>
@stop

@section('content')
    <div>

        <!-- search -->
        <div class="row justify-content-between">
            <div class="col-md-6">
                <form action="{{ route('autores.search') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="search" class="form-control" name="search" placeholder="Digite a busca">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--  -->
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('autores.create') }}" class="btn btn-primary">Cadastrar autor</a>
            </div>
        </div>

        <hr>
        @if (session('message'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">

                <div>
                    {{ session('message') }}
                </div>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @foreach ($autores as $autor)
            <section>
                {{ $autor->nome }}
                <a href="{{ route('autores.show', $autor->id) }}">[detalhes]</a>
                <a href="{{ route('autores.edit', $autor->id) }}">[editar]</a>
            </section>
            <hr>
        @endforeach

        @if (isset($filters))
            {{ $autores->appends($filters)->links() }}
        @else
            {{ $autores->links() }}
        @endif
    </div>
@endsection
