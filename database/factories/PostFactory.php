<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    $slug = Str::slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'user_id' => 2,
        'body' => $faker->realText(rand(80, 600)),
        'published' => true,
    ];
});
