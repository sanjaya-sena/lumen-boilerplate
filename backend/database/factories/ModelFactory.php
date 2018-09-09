<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'     => $faker->name,
        'email'    => $faker->unique()->email,
        'password' => password_hash("123456", PASSWORD_BCRYPT),
        'role_id'  => 1,
        'avatar'   => 'https://ssl.gstatic.com/images/branding/product/1x/avatar_circle_blue_512dp.png'
    ];
});
