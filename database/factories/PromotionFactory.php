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
$factory->define(App\Promotion::class, function (Faker $faker) {
   
    $name = $faker->sentence;
    $products = null;
    $products = App\Product::where('prix','>',30)->where('prix','<',40)->get();

    $ids = $products->pluck('id')->toArray();

    $id = $faker->randomElement($ids);


    $prix = $products->where('id',$id)->first()->prix;

    return [
        'started_at' =>\Carbon\Carbon::now(),
        'finished_at'=>\Carbon\Carbon::now()->addWeeks(2),
        'prix' => $prix - ($prix * 20/100),
        'product_id' => $id,
    ];
});
