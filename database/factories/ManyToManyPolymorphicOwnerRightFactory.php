<?php

use Faker\Generator as Faker;

$factory->define(App\ManyToManyPolymorphicOwnerRight::class, function (Faker $faker) {
    return [
        'name'=>$faker->name
    ];
});
