<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AutorController, EditoraController, MidaController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Routa que da acesso a listagem dos livos
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
//Routa para o formulario de cadastro de livro
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
//Cadastro de Livro
Route::post('/livros', [ LivroController::class, 'store'])->name('livros.store');
//Rota de Busca
Route::any('/livros/search', [LivroController::class, 'search'])->name('livros.search');
//
Route::get('/livros/{id}',[ LivroController::class, 'show'])->name('livros.show');
//
Route::delete('/livros/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');
//
Route::get('/livros/edit/{id}', [Livrocontroller::class, 'edit'])->name('livros.edit');
//
Route::put('/livros/{id}', [Livrocontroller::class, 'update'])->name('livros.update');
//

//Rotas relacionadas ao AutorController
Route::any('autores/search', [AutorController::class, 'search'])->name('autores.search');
Route::resource('autores', AutorController::class);
//rotas relacionadas ao EditoraContorroler
Route::any('editoras/search', [EditoraController::class, 'search'])->name('editoras.search');
Route::resource('editoras', EditoraController::class);

// midia
Route::resource('midias', MidaController::class);

