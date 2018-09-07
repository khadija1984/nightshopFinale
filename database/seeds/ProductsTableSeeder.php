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
        DB::table('Products')->insert([
            [
            'name' => 'Smirnoff Vodka-Nature',
            'slug' => 'alcools',
            'image' => 'assets\images\Softs.png',
            'description'=> 'Smirnoff No. 21 est la vodka numéro 1 au monde. Son goût classique a inspiré d’autres variétés de vodka aux quatre coins du globe.',
            'Prix'=>'25,00 €',
            'Category_id'=>'2',
            ],
            [
            'name' => 'ABSOLUT Blue Vodka',
            'slug' => 'alcools',
            'image' => 'assets\images\AbsolutVodka70cl.png',
            'description'=> 'Degré d Alcool
                40 % 
                Descriptif
                Format
                70 cL Bouteille',
            'Prix'=>'32,00 €',
             'Category_id'=>'1',
            
            ],
                [
            'name' => 'ERISTOFF Vodka – Red',
            'slug' => 'alcools',
            'image' => 'assets\images\EristoffRed70cl.png',
                    'description'=> 'Format
                    70 cL Bouteille
                    Apparence
                    Rouge intense.',
            'Prix'=>'25,00 €',
                    'Category_id'=>'3',
            ],
            [
            'name' => 'Trojka Pink',
            'slug' => 'alcools',
            'image' => 'assets\images\TrojkaPink70cl.png',
                    'description'=> 'Marque
                        Trojka
                        Alcool
                        17 %',
            'Prix'=>'28,00 €',  
                'Category_id'=>'1',
            ],
         ]);
       // $tags = App\Tag::orderByRaw('RAND()')->take(4)->get();
        
        /**factory(App\Product::class, 50)->create()->each(function($u) use ($tags){
          
            **foreach($tags as $tag)
            **{
            ** $u->tags()->attach($tag->id); 
   
           ** }
            
         **});
    *}
                */
}
}
