<?php

use Faker\Generator as Faker;

$factory->define(App\HasManyThroughTop::class, function (Faker $faker) {
    return [
        'top'=>$faker->name
    ];
});
