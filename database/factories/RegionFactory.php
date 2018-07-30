<?php

use Faker\Generator as Faker;

$factory->define(App\Kunci::class, function (Faker $faker) {
    return [
        'nama_region' => $faker->city,
    ];
});
