<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = App\Tag::orderByRaw('RAND()')->take(4)->get();
        
        factory(App\Product::class, 50)->create()->each(function($u) use ($tags){
          
            foreach($tags as $tag)
            {
               $u->tags()->attach($tag->id); 
   
            }
            
         });
    }
}
