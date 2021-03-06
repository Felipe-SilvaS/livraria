<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLivro;
use App\Models\{Editora, Livro, Midia};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $editoras = Editora::select('id', 'nome')->get();
            return view('livros.create', compact('editoras'));
    }

    public function store(StoreUpdateLivro $request)
    {
        $data = $request->all();
        if (isset($request->capa) && $request->capa->isValid()) {
            $nameFile = Str::of($request->isbn)
                ->slug('-') . '.' . $request->capa->getClientOriginalExtension();
            $imagem = $request->capa->storeAs('livro', $nameFile);
            $data['capa'] = $imagem;
            $tmp = Editora::where('nome', '=', $request->editora_id)->get();
            if ($tmp != null) {
                $editora = $tmp->first();
                $data['editora_id'] = $editora->id;
            }
            Livro::create($data);
            return redirect()->route('livros.index');
        } else {
            return redirect()
                ->route('livros.index')
                ->with('message', 'Imagem inválido!');
        }
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

        $midia = $livro->midia;
        if ($midia == null) {
            $midia = new Midia;
            $midia->nome = '';
            $midia->descricao = '';
        }
        return view('livros.show', compact('livro', 'midia'));
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
        if (isset($request->capa) and  $request->capa->isValid()) {
            if (Storage::exists($livro->capa)) {
                Storage::delete($livro->capa);
            }
            $nameFile = Str::of($request->isbn)->slug('-')
                . '.' . $request->capa->getClientOrinalExtension();
            $imagem = $request->capa->storeAs('livro', $nameFile);
            $data['capa'] = $imagem;
            $livro->update($data);
            return redirect()->route('livros.index')->with('message', 'Livro Editado');
        } else {
            return redirect()->route('livros.index')->with('message', 'Imagem inválida');
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
            ->paginate(15);

        return view('livros.index', compact('livros', 'filters'));
    }
}
