<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Room::class, function (Faker $faker) {
    return [
        'available' => $faker->boolean,
        'name' => $faker->randomElement(['Room 1', 'Room 2', 'Bathroom 1', 'Bathroom 2']),
        'category_id' => function () {
            return factory(App\Models\RoomCategory::class)->create()->id;
        },
    ];
});
