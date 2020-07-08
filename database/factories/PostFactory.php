<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(6);

    return [
        'category_id' => $faker->numberBetween(1, 20),
        'company_id' => $faker->numberBetween(1, 20),
        'title' => $title,
        'description' => $faker->text(200),
        'image' => $faker->imageUrl(377, 250),
        'salary' => $faker->randomNumber(7),
        'district' => $faker->streetName,
        'city' => $faker->city,
        'slug' => Str::slug($title)
    ];
});
