<?php

use Faker\Generator as Faker;

$factory->define(App\ManyToManyPivot::class, function (Faker $faker) {
    return [
        'reden'=>$faker->name
    ];
});
