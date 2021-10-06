<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        "title1" => $faker->text($maxNbChars=10),
        "content1" => $faker->sentence(),
        "featured_image1" => $faker->image('public/images', 640,480, null, false)
    ];
});
