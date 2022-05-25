<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
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
//
Route::get('/livros/{id}',[ LivroController::class, 'show'])->name('livros.show');
//
Route::delete('/livros/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');
//
Route::get('/livros/edit/{id}', [Livrocontroller::class, 'edit'])->name('livros.edit');
//
Route::put('/livros/{id}', [Livrocontroller::class, 'update'])->name('livros.update');

//Rotas relacionadas ao AutorController
Route::resource('autores', AutorController::class);


