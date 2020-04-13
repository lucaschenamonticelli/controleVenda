<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call('ProdutoSeeder');
        $this->call('FormaPagamentoSeeder');
        $this->call('VendaSeeder');
        $this->call('ProdutoVendaSeeder');
        $this->call('UserSeeder');
    }
}
