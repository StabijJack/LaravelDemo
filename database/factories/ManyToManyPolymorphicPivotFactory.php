<?php

use Faker\Generator as Faker;

$factory->define(App\ManyToManyPolymorphicPivot::class, function (Faker $faker) {
    return [
        'reason'=>$faker->name
    ];
});
