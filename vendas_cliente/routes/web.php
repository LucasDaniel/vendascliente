<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;

Route::get('/', function () {
    return view('dashboard.viewDashboard');
});

Route::get('/cliente', [ClienteController::class, 'viewCliente']);
Route::get('/cliente/list', [ClienteController::class, 'list']);
Route::post('/cliente', [ClienteController::class, 'create']);
Route::delete('/cliente/{id}', [ClienteController::class, 'delete']);

Route::get('/produto', [ProdutoController::class, 'viewProduto']);
Route::get('/produto/list', [ProdutoController::class, 'list']);
Route::post('/produto', [ProdutoController::class, 'create']);
Route::delete('/produto/{id}', [ProdutoController::class, 'delete']);

Route::get('/venda', [VendaController::class, 'viewVenda']);
Route::get('/venda/list', [VendaController::class, 'list']);
Route::post('/venda', [VendaController::class, 'create']);
