<?php /** @noinspection ALL */

use Faker\Generator as Faker;

$factory->define(App\products::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description' => $faker->sentence(3),
        'ISBN' => $faker->sentence(2),
        'price' => $faker->randomNumber(4),
    ];
});


