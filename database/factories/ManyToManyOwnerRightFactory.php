<?php

use Faker\Generator as Faker;

$factory->define(App\ManyToManyOwnerRight::class, function (Faker $faker) {
    return [
        'course'=>$faker->name
    ];
});
