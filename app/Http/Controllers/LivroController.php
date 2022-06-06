<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLivro;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        // retorna todos os livros ordenando ordenando pelo id em decrescente
        $livros = Livro::orderBy('id', 'desc')->paginate(2);
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(StoreUpdateLivro $request)
    {
        Livro::create($request->all());
        return redirect()->route('livros.index');
    }

    public function show($id)
    {
        $livro = Livro::find($id);
        if (!$livro) {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Livro não encontrado');
        }
        return view('livros.show', compact('livro'));
    }

    public function destroy($id)
    {
        $livro = Livro::find($id);
        if (!$livro) {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Livro não foi encontrado');
        }
        $livro->delete();
        return redirect()
            ->route('livros.index')
            ->with('message', 'Livro Deletado');
    }

    public function edit($id)
    {
        $livro = Livro::find($id);
        if (!$livro) {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Livro não encontrado');
        }

        return view('livros.edit', compact('livro'));
    }

    public function update(StoreUpdateLivro $request, $id)
    {
        $livro = Livro::find($id);
        if (!$livro) {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Livro não encontrado');
        }

        $livro->update($request->all());
        return redirect()
            ->route('livros.index')
            ->with('message', 'Livro editado!');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');
        $livros = Livro::where('titulo', 'LIKE', "%$request->search%")
            ->orwhere('idioma', 'LIKE', "%$request->search%")
            ->paginate(1);

        return view('livros.index', compact('livros', 'filters'));
    }
}
