<?php

namespace App\Services;

use App\Models\Venda;
use App\Repositories\VendaRepository;

class VendaService extends BaseService
{
    /**
     * Constructor, set repository
     */
    public function __construct() {
        $this->repository = new VendaRepository();
    }

    public function list() {
        return $this->repository->listWithClienteAndProduto();
    }

}