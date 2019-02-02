<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Action::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['💦', '💩']),
        'priority' => $faker->numberBetween(1, 2),
    ];
});
