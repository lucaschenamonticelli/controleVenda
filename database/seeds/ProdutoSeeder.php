<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$produtos = array('Produto 1', 'Produto 2', 'Produto 3', 'Produto 4', 'Produto 5');
    	foreach ($produtos as $key => $value):
    		DB::table('produto')->insert([
	    		'nome' => $value
	    	]);
    	endforeach;
    	//factory(App\Produto::class, 50)->create();
    }
}
