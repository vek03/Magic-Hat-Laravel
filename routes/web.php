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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/as', function () {
    return view('login');
})->name('as');


Route::get('/fale-conosco', function () {
    return view('fale-conosco');
})->name('fale-conosco');


Route::get('/catalogo', [ProdutoController::class, 'list'])->name('catalogo');


Route::get('/search/{pesquisa}', function () {
    return view('search');
})->name('search');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//FALLBACK
Route::fallback(function () {
    return back();
});



//ADMIN
Route::middleware(['auth', 'auth-admin'])->group(function () 
{
    //Dashboard
    Route::get('/admin-dashboard', [ProdutoController::class, 'indexAcatadas'])->name('atendente.acatadas');
    

    //View Cadastro Produto
    Route::get('/cadastro-produto', [ProdutoController::class, 'create'])->name('admin.create-prod');

    //View Cadastro Produto
    Route::post('/cadastro-produto', [ProdutoController::class, 'store'])->name('admin.store-prod');


    //View Catalogo
    Route::get('/catalogo-admin', [ProdutoController::class, 'catalogoAdmin'])->name('admin.catalogo');


    //View Editar Produto
    Route::get('/editar-produto/{produto}', [ProdutoController::class, 'edit'])->name('admin.edit-prod');
    
    //Editar Produto
    Route::patch('/editar-produto/{produto}', [ProdutoController::class, 'update'])->name('admin.update-prod');
});



//CLIENTE
Route::middleware(['auth', 'auth-client'])->group(function () 
{
    //View Carrinho
    Route::get('/atendente-denuncias-acatadas', [CarrinhoController::class, 'list'])->name('client.list-carrinho');


    //View Editar Perfil
    Route::get('/editar-perfil', [ProfileController::class, 'edit'])->name('admin.edit-prod');
    
    //Editar Dados
    Route::patch('/editar-perfil', [ProfileController::class, 'update'])->name('admin.update-prod');


    //View Finalizar Compra
    Route::get('/finalizar-compra', [CompraController::class, 'create'])->name('client.create-compra');
    
    //Finalizar Compra
    Route::post('/finalizar-compra', [CompraController::class, 'store'])->name('client.store-compra');
});



require __DIR__.'/auth.php';