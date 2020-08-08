<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Blog::class, function (Faker $faker) {
    $title = $faker->sentence(2);

    return [
        'title' => $title,
        'description' => $faker->text(200),
        'image' => $faker->imageUrl(377, 250),
        'slug' => Str::slug($title)
    ];
});
