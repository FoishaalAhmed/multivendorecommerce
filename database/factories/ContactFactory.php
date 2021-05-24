<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'phone' => '01700000000',
        'email' => $faker->unique()->safeEmail,
        'facebook' => 'facebook.com',
        'twitter' => 'twitter.com',
        'instagram' => 'instagram.com',
        'pinterest' => 'pinterest.com',
        'address' => 'Dhaka',
    ];
});
