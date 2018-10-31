<?php

use Faker\Generator as Faker;

$factory->define(App\HasManyThroughBottom::class, function (Faker $faker) {
    return [
        'bottom'=>$faker->name
    ];
});
