@extends('adminlte::page')

@section('title', 'Livraria | Editoras')

@section('content_header')
    <h1>Editoras Cadastradas</h1>
@stop

@section('content')
    <div>

        <!-- search -->
        <div class="col-md-6 px-0">
            <form action="{{ route('editoras.search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="search" class="form-control" id="search" placeholder="Buscar editora">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </form>
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

        <ul class="list-group mb-3">
            @foreach ($editoras as $editora)
                <li class="list-group-item d-flex justify-content-between">
                    <div><span class="align-middle">{{ $editora->nome }}</span></div>
                    <div>
                        <a href="{{ route('editoras.show', $editora->id) }}"
                            class="btn btn-outline-info btn-sm ml-2">detalhes</a>
                        <a href="{{ route('editoras.edit', $editora->id) }}"
                            class="btn btn-outline-info btn-sm ml-2">editar</a>
                    </div>
                </li>
            @endforeach
        </ul>

        @if (isset($filters))
            {{ $editoras->appends($filters)->links() }}
        @else
            {{ $editoras->links() }}
        @endif

    </div>
@endsection
