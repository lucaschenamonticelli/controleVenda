<?php

use Illuminate\Database\Seeder;

class FormapagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formaPgto = array('Boleto', 'Cartão Débito', 'Cartão Crédito', 'Paypal');
    	foreach ($formaPgto as $key => $value):
    		DB::table('forma_pagamento')->insert([
	    		'nome' => $value
	    	]);
    	endforeach;
    }
}
