<?php

use Faker\Generator as Faker;

$factory->define(App\OneToManyOwner::class, function (Faker $faker) {
    return [
        'name'=> $faker->name
    ];
});
