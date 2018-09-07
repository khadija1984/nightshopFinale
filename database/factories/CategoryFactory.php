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
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Category::class, function (Faker $faker) {

	$name = $faker->sentence($nbWords =2 , $variableNbWords = true);

    return [
        'name' => $name,
       	'slug' => str_slug($name),
        'image' => imageUrl($width=400, $height=400, $image),
    ];
});
