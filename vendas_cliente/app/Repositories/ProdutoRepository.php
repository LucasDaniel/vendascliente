<?php

namespace App\Repositories;

use App\Models\Produto;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProdutoRepository extends BaseRepository
{
	/**
     * Begin the model
     */
	public function __construct() {
		$this->model = new Produto();
	}

    public function create(array $data) {
        $this->model = new Produto();
        $this->model->fill($data);
        $this->model->save();
    }

    public function list(): array {
        return $this->model::get()->toArray();
    }

	public function delete(int $id) {
        return $this->model->where('id',$id)
                           ->first()
                           ->delete();
    }

}