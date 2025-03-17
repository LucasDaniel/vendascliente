<?php

namespace App\Services;

use App\Models\Produto;
use App\Repositories\ProdutoRepository;

class ProdutoService extends BaseService
{
    /**
     * Constructor, set repository
     */
    public function __construct() {
        $this->repository = new ProdutoRepository();
    }

    public function create(array $data)
    {
        $this->repository->create($data);
    }

    public function list(): array
    {
        return $this->repository->list();
    }

    public function delete(int $id) {
        return $this->repository->delete($id);
    }

}