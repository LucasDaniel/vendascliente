<?php

namespace App\Repositories;

use App\Models\Venda;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class VendaRepository extends BaseRepository
{
	/**
     * Begin the model
     */
	public function __construct() {
		$this->model = new Venda();
	}

    public function listWithClienteAndProduto() {
        $query = '
        SELECT v.created_at as data_hora, c.nome as cliente, p.nome as produto, v.quantidade, (v.quantidade*p.valor) as valor_total
            FROM venda v
            INNER JOIN cliente c ON c.id = v.cliente_id
            INNER JOIN produto p ON p.id = v.produto_id;
        ';
        return DB::select($query);
    }

}