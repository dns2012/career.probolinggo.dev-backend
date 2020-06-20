<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Company::class, function (Faker $faker) {
    $title = $faker->sentence(2);

    return [
        'title' => $title,
        'description' => $faker->text(200),
        'image' => $faker->imageUrl(377, 250),
        'slug' => Str::slug($title)
    ];
});
