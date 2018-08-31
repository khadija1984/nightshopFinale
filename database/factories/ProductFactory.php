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
$factory->define(App\Product::class, function (Faker $faker) {
    
    $name = $faker->sentence;
    $categories = null;
    $categories = App\Category::pluck('id')->toArray();
    $types = ['alcool','food','maison'];
    $image = $faker->randomElement($types);
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'description' => $faker->paragraph,
        'prix' => $faker->randomFloat(2, $min = 0, $max = 50),
        'image' => $faker->imageUrl($width=400, $height=400, $image, true, 'Faker'),
        'qte' =>100,
        'category_id' =>$faker->randomElement($categories),
        
    ];
});
