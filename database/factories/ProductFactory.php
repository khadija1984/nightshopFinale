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
use Faker\Generator as Faker;
$factory->define(App\Product::class, function (Faker $faker) {
   
    $name = $faker->sentence;
    $categories = null;
    $categories = App\Category::pluck('id')->toArray();
    

    $types = ['people','nature','transport','sports','technics','fashion','business','food'];
    
    $image = $faker->randomElement($types);

    return [
        'name' => $name,
        'slug' => str_slug($name),
        'description'=>$faker->paragraph,
        'prix' => $faker->randomFloat(2, $min = 0, $max = 50),
        'image' => $faker->imageUrl($width=400, $height=400, $image , true, 'Faker'),
        'qte' =>100,
        'category_id' =>$faker->randomElement($categories) ,
        
    ];
});
