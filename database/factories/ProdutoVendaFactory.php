<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProdutoVenda;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(ProdutoVenda::class, function (Faker $faker) {
	$produto_ids = \DB::table('produto')->select('id')->get();
    $produto_id = $faker->randomElement($produto_ids)->id;

	$venda_ids = \DB::table('venda')->select('id')->get();
    $venda_id = $faker->randomElement($venda_ids)->id;

    return [
        'quantidade' => rand(1, 5), 
        'produto_id' => $produto_id,
        'venda_id' => $venda_id
    ];
});