<?php

use Faker\Generator as Faker;

$factory->define(App\ManyToManyPolymorphicOwnerLeft::class, function (Faker $faker) {
    return [
        'name'=>$faker->name
    ];
});
