<?php

use Faker\Generator as Faker;

$factory->define(App\PolymorphicOwnerLeft::class, function (Faker $faker) {
    return [
        'leftname'=>$faker->name
    ];
});
