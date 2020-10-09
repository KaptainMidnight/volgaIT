<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Purchase;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'amount' => rand(1, 10000),
        'status' => 'В обработке',
        'address' => $faker->address,
        'user_id' => 1,
        'title' => $faker->text(5),
    ];
});
