<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'name' => 'Alcools',
            'slug' => 'alcools',
            'image' => 'assets\images\Alcools.png',
            ],
            [
            'name' => 'Divers',
            'slug' => 'divers',
            'image' => 'assets\images\Divers.png',
            
            ],
                [
            'name' => 'Packs',
            'slug' => 'packs',
            'image' => 'assets\images\Packs.png',
            ],
            [
            'name' => 'Softs',
            'slug' => 'softs',
            'image' => 'assets\images\Softs.png',     
            ],
         ]);

        //factory(App\Category::class, 4)->create();
    }
}
