<?php

use Faker\Generator as Faker;

$factory->define(App\OneToManyMember::class, function (Faker $faker) {
    return [
        'car' => $faker->name
    ];
});
