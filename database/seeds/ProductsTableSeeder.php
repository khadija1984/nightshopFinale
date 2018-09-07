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
            'image' => 'assets\images\Smirnoff70cl.png',
            'description'=> 'Smirnoff No. 21 est la vodka numéro 1 au monde. Son goût classique a inspiré d’autres variétés de vodka aux quatre coins du globe.',
            'Prix'=>'25,00 €',
            'Category_id'=>'1',
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
                    'Category_id'=>'1',
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
            [
            'name' => 'Red Bull',
            'slug' => 'softs',
            'image' => 'assets\images\RedBullCan-300x158.png',
                    'description'=> 'Red Bull Canettes',
                    'Prix'=>'2,50',  
                    'Category_id'=>'4',
            ],
             [
            'name' => 'Coca Cola 1,5L',
            'slug' => 'softs',
            'image' => 'assets\images\CocaCola1.5l.png',
                    'description'=> 'Coca Cola 1,5L',
                    'Prix'=>'4,00',  
                    'Category_id'=>'4',
            ],
              [
            'name' => 'Sprite 1,5 L',
            'slug' => 'softs',
            'image' => 'assets\images\Sprite1.5l.png',
                    'description'=> 'Sprite 1,5 L',
                    'Prix'=>'4,00',  
                    'Category_id'=>'4',
            ],
             [
            'name' => 'Minute Maid – Orange Original – 1 L',
            'slug' => 'softs',
            'image' => 'assets\images\MinuteMaidOrange1l.png',
                    'description'=> 'Marque
                        Minute Maid
                        Ingrédients
                        Teneur en fruits 100%
                        Conseils d’utilisation
                        Servir frais.
                        Agiter avant d’ouvrir',
                    'Prix'=>'4,00',  
                    'Category_id'=>'4',
            ],
            [
            'name' => 'Minute Maid – Pomme – 1 L',
            'slug' => 'softs',
            'image' => 'assets\images\MinuteMaidPomme1l.png',
                    'description'=> 'Marque
                        Minute Maid
                        Ingrédients
                        Jus de pomme à base de concentré, Teneur en fruits 100%.',
                    'Prix'=>'4,00',  
                    'Category_id'=>'4',
            ],
            [
            'name' => 'Fanta 1,5 L',
            'slug' => 'softs',
            'image' => 'assets\images\Fanta1.5l.png',
                    'description'=> 'Fanta 1,5 L',
                    'Prix'=>'4,00',  
                    'Category_id'=>'4',
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
