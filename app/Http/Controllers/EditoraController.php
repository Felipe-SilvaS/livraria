<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEditora;
use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoras = Editora::orderBy('id', 'desc')->get();
        return view('editoras.index', compact('editoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateEditora $request)
    {
        Editora::create($request->all());
        return redirect()->route('editoras.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $editora = Editora::find($id);
        if (!$editora) {
            return redirect()
                ->route('editora.index')
                ->with('message', 'Editora não entrontrada');
        }
        return view('editoras.show', compact('editora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editora = Editora::find($id);

        if (!$editora) {
            return redirect()
                ->route('editora.index')
                ->with('message', 'Editora não encontrada');
        }

        return view('editoras.edit', compact('editora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateEditora $request, $id)
    {
        $editora = Editora::find($id);
        if (!$editora) {
            return redirect()
                ->route('editoras.index')
                ->with('message', 'Editora não encontrada');
        }

        $editora->update($request->all());
        return redirect()
            ->route('editoras.index')
            ->with('message', 'Dados atualizados com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editora = Editora::find($id);
        if (!$editora) {
            return redirect()
                ->route('editoras.index')
                ->with('message', 'Editora não encontrada');
        }

        $editora->delete();
        return redirect()
            ->route('editoras.index')
            ->with('message', 'Editora deletada');
    }
}
