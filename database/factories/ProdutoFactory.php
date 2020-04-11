<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
$randomDate = mt_rand(strtotime('2020/01/01'), strtotime('2020/06/30'));
|
*/

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name
    ];
});