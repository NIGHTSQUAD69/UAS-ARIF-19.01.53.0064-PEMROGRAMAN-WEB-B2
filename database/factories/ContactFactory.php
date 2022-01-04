<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    $gender     = $faker->randomElement(['male', 'female']);
    $birthDate  = $faker->date($format = 'Y-m-d', $max = 'now');
 

    $now      = new DateTime();
    $in       = DateTime::createFromFormat('Y-m-d', $birthDate);
    $interval = $now->diff($in);
    $age      = $interval->y;

    return [
        'nik'   => $faker->unique()->randomNumber($nbDigits = 8),
        'name'  => $faker->name,
        'birthdate' => $birthDate,
        'age'   => $age,
        'gender'    => $gender,
        'address' => $faker->address,
    ];
});
