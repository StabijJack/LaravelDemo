<?php

use Faker\Generator as Faker;

$factory->define(App\OneToOneLeft::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
