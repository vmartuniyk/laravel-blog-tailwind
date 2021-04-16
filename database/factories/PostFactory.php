<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $this->faker->word(5),
        'description' => $this->faker->text(100),
        'category' => $this->faker->word(2),
    ];
});
