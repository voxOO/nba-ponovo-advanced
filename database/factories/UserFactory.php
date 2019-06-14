<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Comment;
use App\News;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

// $factory->define(Comment::class , function (Faker $faker) {
//     return [
//         'content' => $faker->sentence/paragraph,
//         'user_id' => rand(1, User::count()),
//         'created_at' => now(),
//         'updated_at' => now(),

//     ];
// });

$factory->define(\App\News::class , function (Faker $faker) {
    return [
        'title' => $faker->sentences(1,true),
        'content' => $faker->text(600),
    ];
});
