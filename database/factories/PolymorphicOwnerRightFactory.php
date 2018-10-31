<?php

use Faker\Generator as Faker;

$factory->define(App\PolymorphicOwnerRight::class, function (Faker $faker) {
    return [
        'rightname'=>$faker->name
    ];
});
