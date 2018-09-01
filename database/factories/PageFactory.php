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
$factory->define(App\Page::class, function (Faker $faker) {

	$name = $faker->sentence($nbWords = 1, $variableNbWords = true);

    return [
        'name' => $name,
       	'slug' => str_slug($name),
       	'content' => $faker->text(),
    ];
});
