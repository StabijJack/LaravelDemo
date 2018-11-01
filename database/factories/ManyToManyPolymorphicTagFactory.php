<?php

use Faker\Generator as Faker;

$factory->define(App\ManyToManyPolymorphicTag::class, function (Faker $faker) {
    return [
        'tag'=>$faker->name
    ];
});
