<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpateLivros;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index(){
        // retorna todos os livros ordenando ordenando pelo id em decrescente
        $livros = Livro::orderBy('id','desc')->get();
        return view('livros.index', compact('livros'));
    }

    public function create(){
        return view('livros.create');
    }

    public function store(StoreUpateLivros $request){
            Livro::create($request->all());
            return redirect()->route('livros.index');
    }
}
