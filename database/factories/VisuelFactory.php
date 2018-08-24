<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Visuel::class, function (Faker $faker) {
    
    $name = $faker->sentence($nbWords = 2, $variableNbWords = true);
    $products = App\Product::pluck('id')->toArray();
    $type = ['alcool','food','maison'];
    $image = $faker->randomElement($type);
    return [
        'name' => $name,
        'url' =>$faker->imageUrl($width=400, $height=400, $image, true, 'Faker'),
        'product_id' =>$faker->randomElement($products),
        
    ];
});
