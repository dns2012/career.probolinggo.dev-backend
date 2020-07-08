<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->sentence(2);

    return [
        'title' => $title,
        'description' => $faker->text(200),
        'slug' => Str::slug($title)
    ];
});
