<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAutor;
use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::orderby('nome')->paginate(1);
        return view('autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateAutor $request)
    {
        Autor::create($request->all());
        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()
                ->route('autores.index')
                ->with('message', 'Livro não foi encontrado');
        }

        return view('autores.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()
                ->route('autores.index')
                ->with('message', 'Livro não foi encontrado');
        }

        return view('autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateAutor $request, $id)
    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()
                ->route('autores.index')
                ->with('message', 'Autor não encontrado');
        }

        $autor->update($request->all());
        return redirect()
            ->route('autores.index')
            ->with('message', 'Atualizado os dados do autor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor = Autor::find($id);
        if (!$autor) {
            return redirect()
                ->route('autores.index')
                ->with('message', 'Autor não encontrado');
        }

        $autor->delete();
        return redirect()
            ->route('autores.index');
        with('message', 'Autor Deletado');
    }

    public function search(Request $request){
        $filters = $request->except('_token');
        $autores = Autor::where('nome', 'LIKE', "%$request->search%")
            ->paginate(1);
        return view('autores.index', compact('autores', 'filters'));
    }
}
