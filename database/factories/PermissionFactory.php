<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Permission;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'name' => Str::random(10),
        'title' => $faker->name,
    ];
});
