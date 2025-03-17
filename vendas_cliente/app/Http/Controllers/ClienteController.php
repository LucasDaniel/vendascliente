<?php

namespace App\Http\Controllers;

use App\Services\ClienteService;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function __construct() {
        $this->service = new ClienteService();
    }

    public function list()
    {
        return $this->service->list();
    }

    public function create(Request $request)
    {
        $this->service->create($request->all());
        return redirect('/cliente');
    }

    public function delete(int $id)
    {
        return $this->service->delete($id);
    }

    public function viewCliente() {
        return view('dashboard.viewCliente',['clientes'=>$this->service->list()]);
    }
}
