<?php

namespace App\Services;

use App\Models\Cliente;
use App\Repositories\ClienteRepository;

class ClienteService extends BaseService
{
    /**
     * Constructor, set repository
     */
    public function __construct() {
        $this->repository = new ClienteRepository();
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