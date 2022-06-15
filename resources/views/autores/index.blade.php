@extends('adminlte::page')

@section('title', 'Livraria | Autores')

@section('content_header')
    <h1>Autores Cadastrados</h1>
@stop

@section('content')
    <div>
        <!-- search -->
            <div class="col-md-6 px-0">
                <form action="{{ route('autores.search') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="search" class="form-control" name="search" placeholder="Buscar autor">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!--  -->

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

        <ul class="list-group mb-3">
            @foreach ($autores as $autor)
                <li class="list-group-item d-flex justify-content-between">
                    <div><span class="align-middle">{{ $autor->nome }}</span></div>
                    <div>
                        <a href="{{ route('autores.show', $autor->id) }}"
                            class="btn btn-outline-info btn-sm ml-2">detalhes</a>
                        <a href="{{ route('autores.edit', $autor->id) }}"
                            class="btn btn-outline-info btn-sm ml-2">editar</a>
                    </div>
                </li>
            @endforeach
        </ul>

        @if (isset($filters))
            {{ $autores->appends($filters)->links() }}
        @else
            {{ $autores->links() }}
        @endif
    </div>
@endsection
