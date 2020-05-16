<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Post;
use App\CategoryPost;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('123456'),
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->unique()->sentence;
    $isPublished = ['1', '0'];
    return [
        'user_id' => rand(1, 5),
        'title' => $title,
        'slug' => str_slug($title),
        'sub_title' => $faker->sentence,
        'details' => $faker->paragraph,
        'post_type' => 'post',
        'is_published' => $isPublished[rand(0, 1)],
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

$factory->define(CategoryPost::class, function (Faker $faker) {
    return [
        'category_id' => rand(1, 5),
        'post_id' => rand(1, 100),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
