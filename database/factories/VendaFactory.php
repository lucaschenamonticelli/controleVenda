<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Venda;
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

$factory->define(Venda::class, function (Faker $faker) {
	$randomDate = mt_rand(strtotime('2020/01/01'), strtotime('2020/06/30'));
	$formapgto_ids = \DB::table('forma_pagamento')->select('id')->get();
    $formapgto_id = $faker->randomElement($formapgto_ids)->id;

    return [
        'data' => date('Y/m/d', $randomDate), 
        'formapagamento_id' => $formapgto_id
    ];
});