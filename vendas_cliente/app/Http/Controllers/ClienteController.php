<?php

namespace App\Http\Controllers;

use App\Services\ClienteService;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function __construct() {
        $this->service = new ClienteService();
    }

    public function create(Request $request)
    {
        $this->service->create($request->all());
        return redirect('/cliente');
    }

    public function viewCliente() {
        return view('dashboard.viewCliente',['clientes'=>$this->service->list()]);
    }
}
