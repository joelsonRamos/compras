<?php

use Illuminate\Support\Facades\Route;

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

// PRODUTO
Route::get('/Produto', [App\Http\Controllers\Produtos\ProdutosController::class, 'index'])->name('Produto.index');
Route::post('/Produto/store', [App\Http\Controllers\Produtos\ProdutosController::class, 'store'])->name('Produto.store');