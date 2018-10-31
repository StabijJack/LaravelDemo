<?php

use Faker\Generator as Faker;

$factory->define(App\PolymorphicMember::class, function (Faker $faker) {
    return [
        'name'=>$faker->name
    ];
});
