<?php

namespace App\Http\Controllers;

use App\Services\ProdutoService;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function __construct() {
        $this->service = new ProdutoService();
    }

    public function list()
    {
        return $this->service->list();
    }

    public function create(Request $request)
    {
        $this->service->create($request->all());
        return true;
    }

    public function delete(int $id)
    {
        return $this->service->delete($id);
    }
}
