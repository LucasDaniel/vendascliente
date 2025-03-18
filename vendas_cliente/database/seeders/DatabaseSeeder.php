<?php

namespace Database\Seeders;

use App\Services\ClienteService;
use App\Services\ProdutoService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $clienteService = new ClienteService();
        $clienteService->create(['nome'=>'Pedro Almeida']);
        $clienteService->create(['nome'=>'Angelica Faustina']);
        $clienteService->create(['nome'=>'Souza Pires']);

        $produtoService = new ProdutoService();
        $produtoService->create(['nome'=>'Biscoito','valor'=>2.49]);
        $produtoService->create(['nome'=>'Pepsi','valor'=>9.98]);
        $produtoService->create(['nome'=>'Leite','valor'=>4.79]);
    }
}
