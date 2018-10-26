<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'detail'=> $faker->paragraph,
        'detail'=> $faker->paragraph,
        'price'=> $faker->numberBetween(200 , 1000),
        'stock'=> $faker->numberBetween(30,800),
        'discount'=> $faker->numberBetween(5 , 30),

    ];
});
