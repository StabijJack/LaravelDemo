<?php

use Faker\Generator as Faker;

$factory->define(App\OneToOneRight::class, function (Faker $faker) {
    return [
        'phone' => $faker->phoneNumber
    ];
});
