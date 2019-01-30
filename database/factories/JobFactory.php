<?php

use Faker\Generator as Faker;

$factory->define(\App\Job::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'description' => $faker->sentence,
        'offered_price_quote' => 200.00,
        'location' => $faker->city,
        'direction_description' => $faker->paragraph,
        'estimated_duration' => $faker->sentence(3),
        'posted_by' => factory(\App\User::class)->create()
    ];
});





