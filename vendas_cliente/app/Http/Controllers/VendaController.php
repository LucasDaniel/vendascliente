<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;
use App\Services\VendaService;
use App\Services\ClienteService;
use App\Services\ProdutoService;

class VendaController extends Controller
{
    public function __construct() {
        $this->service = new VendaService();
    }

    public function create(Request $request)
    {
        $this->service->create($request->all());
        return redirect('/venda');
    }

    public function viewVenda() {
        $clienteService = new ClienteService();
        $produtoService = new ProdutoService();
        return view('dashboard.viewVenda',['vendas'=>$this->service->list(), 
        'clientes'=>$clienteService->list(), 
        'produtos'=>$produtoService->list()]);
    }
}
