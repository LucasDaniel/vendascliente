<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function list(): array {
        return $this->model::get()->toArray();
    }

    public function create(array $data) {
        $this->model::create($data);
    }

    public function delete(int $id) {
        return $this->model->find($id)->delete();
    }
}