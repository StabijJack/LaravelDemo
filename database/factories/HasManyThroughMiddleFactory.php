<?php

use Faker\Generator as Faker;

$factory->define(App\HasManyThroughMiddle::class, function (Faker $faker) {
    return [
        'middle'=>$faker->name
    ];
});
