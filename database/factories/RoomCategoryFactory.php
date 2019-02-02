<?php

use Faker\Generator as Faker;

$factory->define(App\Models\RoomCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Bathroom', 'Conference'])
    ];
});
