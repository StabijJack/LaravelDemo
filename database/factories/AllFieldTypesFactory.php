<?php

use Faker\Generator as Faker;

$factory->define(App\AllFieldType::class, function (Faker $faker) {
    return [
        // 'bigIncrements' => no way,
        'bigInteger' => $faker->biasedNumberBetween(-100,100),
        // 'binary' => $faker->biasedNumberBetween(0,100),
        'boolean' => $faker->boolean(50),
        'char'=> $faker->name,
        'date' => $faker->dateTime(),
        'dateTimeTz'=>now(),
        'decimal' => $faker->biasedNumberBetween(-100,100),
        'double' => $faker-> biasedNumberBetween(-100,100), 
        'enum'  => $faker->randomElement(['easy', 'hard']),
        'float' => $faker-> biasedNumberBetween(-100,100),
        // 'geometry'  => $faker-> name,
        // 'geometryCollection'  => $faker->name ,
        // 'increments'  no way,
        'integer'  => $faker-> biasedNumberBetween(-100,100),
        'ipAddress' => $faker-> ipv4,
        // 'json' ; => $faker-> name,
        // 'jsonb => $faker-> name
        // 'lineString' => LineString(1,1,2,2,3,3),
        'longText' => $faker-> text,
        'macAddress' => $faker-> macAddress,
        // 'mediumIncrements' ; => $faker->  no way,
        'mediumText'  => $faker->text,
        // 'morphs'  //behoord bij de relatiesoort Polymorphic
        // 'multiLineString' => $faker->'LineString(1 1,2 2,3 3)',
        // 'multiPoint'  => $faker-> name,
        // 'multiPolygon => $faker-> name,
        // 'nullableMorphs'  //behoord bij de relatiesoort Polymorphic
        // 'point'  => $faker->name ,
        // 'polygon => $faker-> name,
        // 'smallIncrements'  => $faker=> no way,
        'smallInteger'  => $faker-> biasedNumberBetween(-100,100),
        'string'  => $faker->text(5),
        'text'  => $faker->text(5),
        'time' => $faker-> dateTime(), 
        'timeTz'  => $faker-> dateTime(),
        'timestamp'  => $faker-> dateTime(),
        'timestampTz' => $faker-> dateTime(),
        // 'tinyIncrements'  => $faker-> no way,
        'tinyInteger' => $faker-> biasedNumberBetween(-100,100),
        'unsignedBigInteger' => $faker->biasedNumberBetween(0,100) ,
        'unsignedDecimal' => $faker-> biasedNumberBetween(0,100),
        'unsignedInteger' => $faker-> biasedNumberBetween(0,100),
        'unsignedMediumInteger'  => $faker-> biasedNumberBetween(0,100),
        'unsignedSmallInteger'  => $faker-> biasedNumberBetween(0,100),
        'unsignedTinyInteger'  => $faker-> biasedNumberBetween(0,100),
        'uuid'  => $faker->uuid ,
        'year' => $faker->year()

    ];
});
