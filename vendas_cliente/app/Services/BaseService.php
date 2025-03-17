<?php

namespace App\Services;

use Illuminate\Http\Request;

class BaseService
{

    protected $repository;

    public function list() {
        return $this->repository->list();
    }

    public function create(array $data) {
        return $this->repository->create($data);
    }

    public function delete(int $id) {
        return $this->repository->delete($id);
    }
}