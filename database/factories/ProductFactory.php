<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'description' => $faker->sentence,
        'category_id' => factory(\App\ProductCategory::class),
        'slug' => $faker->slug(4),
        'image' => $faker->randomElement(['img1.jpg','img2.jpg','img3.jpg','img4.jpg']),
        'price' => $faker->randomFloat(1,0,999),
        'stock'=> $faker->randomNumber(2),

    ];

});
