<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
$factory->define(Product::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'category_id' => factory(\App\ProductCategory::class),
        'slug' => $faker->slug(4),
        'image' => $faker->image('public/storage/images',640,480,null,false),
        'price' => $faker->randomFloat(2,0,10000),
        'stock'=> $faker->randomNumber(2),
    ];

});
