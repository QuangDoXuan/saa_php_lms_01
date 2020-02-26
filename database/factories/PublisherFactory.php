<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Publisher;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Publisher::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'code' => Str::random(6),
        'founding' => now(),
        'description' => $faker->text, // password
        'address' => $faker->address,
    ];
});
