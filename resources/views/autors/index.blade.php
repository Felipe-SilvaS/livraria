@extends('layouts.base')
@section('content')
    <section>
        <h1>Lista de Autores</h1>

        <a href="{{ route('autors.create') }}">Inserir novo Livro</a>
        <hr>

        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif

        @foreach ($autors as $autors)
            <section>
                {{ $autors->nome }}
                <a href="{{ route('autors.show', $autors->id) }}">[detalhes]</a>
                <a href="{{ route('autors.edit', $autors->id) }}">[editar]</a>
            </section>
            <hr>
        @endforeach

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ad praesentium pariatur cupiditate quo ipsum
            fugit minus, recusandae quisquam culpa ex numquam qui iste repellat similique nulla! Error, magni a?</p>




    </section>
@endsection
