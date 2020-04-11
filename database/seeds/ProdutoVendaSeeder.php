<?php

use Illuminate\Database\Seeder;

class ProdutoVendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProdutoVenda::class, 80)->create();
    }
}
