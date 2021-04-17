<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Email;
use Faker\Generator as Faker;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'user_id'   => 1,
        'subject'   => $faker->sentence,
        'recipient' => 'email@prueba.com',
        'message'   => $faker->text(250),
    ];
});
