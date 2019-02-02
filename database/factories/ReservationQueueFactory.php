<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ReservationQueue::class, function (Faker $faker) {
    return [
        'priority' => $faker->numberBetween(1, 2),
    ];
});
