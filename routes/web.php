<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\CarrinhoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth-client')->group(function () 
{
    //View Index
    Route::get('/', function () {
        return view('index');
    })->name('home');


    //View Fale Conosco
    Route::get('/fale-conosco', function () {
        return view('fale-conosco');
    })->name('fale-conosco');


    //View Catálogo
    Route::get('/catalogo', [ProdutoController::class, 'list'])->name('catalogo');


    //View Pesquisa
    Route::get('/search/{pesquisa}', function () {
        return view('search');
    })->name('search');
});



//FALLBACK
Route::fallback(function () {
    return back();
});



//ADMIN
Route::middleware(['auth', 'auth-admin'])->group(function () 
{
    //Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    

    //View Cadastro Produto
    Route::get('/cadastro-produto', function () {
        return view('admin.cadastro_produto');
    })->name('admin.create-prod');

    //View Cadastro Produto
    Route::post('/cadastro-produto', [ProdutoController::class, 'store'])->name('admin.store-prod');


    //View Catalogo
    Route::get('/catalogo-admin', [ProdutoController::class, 'listAdmin'])->name('admin.catalogo');


    //View Editar Produto
    Route::get('/editar-prod={produto}', [ProdutoController::class, 'edit'])->name('admin.edit-prod');
    
    //Editar Produto
    Route::patch('/editar-produto/{produto}', [ProdutoController::class, 'update'])->name('admin.update-prod');
});



//CLIENTE
Route::middleware(['auth', 'auth-client'])->group(function () 
{
    //View Carrinho
    Route::get('/carrinho', [CarrinhoController::class, 'list'])->name('client.list-cart');


    //View Editar Perfil
    Route::get('/editar-perfil', [ProfileController::class, 'edit'])->name('client.edit');

    //Editar Dados
    Route::patch('/editar-perfil', [ProfileController::class, 'update'])->name('client.update');


    //Deletar Perfil
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //View Finalizar Compra
    Route::get('/finalizar-compra', [CompraController::class, 'create'])->name('client.create-compra');
    
    //Finalizar Compra
    Route::post('/finalizar-compra', [CompraController::class, 'store'])->name('client.store-compra');
});



require __DIR__.'/auth.php';