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
            'qte'=>'1',
            'description'=> 'Smirnoff ',
            'prix'=>'25.00',
            'category_id'=>'1',
            ],
            [
            'name' => 'ABSOLUT Blue Vodka',
            'slug' => 'alcools',
            'image' => 'assets\images\AbsolutVodka70cl.png',
            'qte'=>'1',
            'description'=> 'Degré d Alcool 40 % Descriptif Format 70 cL Bouteille',
            'prix'=>'32',
            'Category_id'=>'1',
            ],
            [
            'name' => 'ERISTOFF Vodka-Red',
            'slug' => 'alcools',
            'image' => 'assets\images\EristoffRed70cl.png',
            'qte'=>'1',
            'description'=> 'Format 70 cL Bouteille Apparence Rouge intense.',
            'prix'=>'25',
                    'Category_id'=>'1',
            ],
            [
            'name' => 'Trojka Pink',
            'slug' => 'alcools',
            'image' => 'assets\images\TrojkaPink70cl.png',
                'qte'=>'1',
                    'description'=> 'Marque
                        Trojka
                        Alcool
                        17 %',
            'prix'=>'28',  
                'Category_id'=>'1',
            ],
            
            //softs
            [
            'name' => 'Red Bull',
            'slug' => 'softs',
            'image' => 'assets\images\RedBullCan-300x158.png',
                'qte'=>'1',
                    'description'=> 'Red Bull Canettes',
                    'prix'=>'2.50',  
                    'Category_id'=>'4',
            ],
             [
            'name' => 'Coca Cola 1,5L',
            'slug' => 'softs',
            'image' => 'assets\images\CocaCola1.5l.png',
                 'qte'=>'1',
                    'description'=> 'Coca Cola 1,5L',
                    'prix'=>'4',  
                    'Category_id'=>'4',
            ],
              [
            'name' => 'Sprite 1,5 L',
            'slug' => 'softs',
            'image' => 'assets\images\Sprite1.5l.png',
                  'qte'=>'1',
                    'description'=> 'Sprite 1,5 L',
                    'prix'=>'4',  
                    'Category_id'=>'4',
            ],
             [
            'name' => 'Minute Maid – Orange Original – 1 L',
            'slug' => 'softs',
            'image' => 'assets\images\MinuteMaidOrange1l.png',
                 'qte'=>'1',
                    'description'=> 'Marque
                        Minute Maid
                        Ingrédients
                        Teneur en fruits 100%
                        Conseils d’utilisation
                        Servir frais.
                        Agiter avant d’ouvrir',
                    'prix'=>'4',  
                    'Category_id'=>'4',
            ],
            [
            'name' => 'Minute Maid – Pomme – 1 L',
            'slug' => 'softs',
            'image' => 'assets\images\MinuteMaidPomme1l.png',
                'qte'=>'1',
                    'description'=> 'Marque
                        Minute Maid
                        Ingrédients
                        Jus de pomme à base de concentré, Teneur en fruits 100%.',
                    'prix'=>'4',  
                    'Category_id'=>'4',
            ],
            [
            'name' => 'Fanta 1,5 L',
            'slug' => 'softs',
            'image' => 'assets\images\Fanta1.5l.png',
                'qte'=>'1',
                    'description'=> 'Fanta 1,5 L',
                    'prix'=>'4',  
                    'Category_id'=>'4',
            ],
            
            //packs
                [
            'name' => 'Pack Combo',
            'slug' => 'packs',
            'image' => 'assets\images\PackCombo-300x191.png',
            'qte'=>'1',
            'description'=> '1 bouteilles de Smirnoff 70cl-6 Red Bull',
            'prix'=>'36.00',  
            'Category_id'=>'3',
            ],
            [
            'name' => 'Pack Jacky Jack',
            'slug' => 'packs',
            'image' => 'assets\images\promo1.png',
            'qte'=>'1',
            'description'=> '2 bouteilles de Jack Daniel’s 70cl-2 bouteilles de Coca-Cola',
            'prix'=>'68.00',  
            'Category_id'=>'3',
            ],
            
            //divers
            [
            'name' => 'Paquet de Cigarettes',
            'slug' => 'divers',
            'image' => 'assets\images\Cigarettes-300x120.png',
            'qte'=>'1',
            'description'=> 'Toutes marques modèle simple : 10€/p',
            'prix'=>'10.00',  
            'Category_id'=>'2',
            ],
            [
            'name' => 'Chips LAY’S – 45g',
            'slug' => 'divers',
            'image' => 'assets\images\ChipsLays45g.png',
            'qte'=>'1',
            'description'=> 'chips naturel  45 g',
            'prix'=>'2.00',  
            'Category_id'=>'2',
            ],
             [
            'name' => 'BIFI – 25g',
            'slug' => 'divers',
            'image' => 'assets\images\BifiOriginal.png',
            'qte'=>'1',
            'description'=> 'Saucisson sec et fumé',
            'prix'=>'2.00',  
            'Category_id'=>'2',
            ],
              [
            'name' => 'Snickers',
            'slug' => 'divers',
            'image' => 'assets\images\Snickers.png',
            'qte'=>'1',
            'description'=> 'Snickers',
            'prix'=>'2.00',  
            'Category_id'=>'2',
            ],
                 [
            'name' => 'Twix',
            'slug' => 'divers',
            'image' => 'assets\images\Twix-300x111.png',
            'qte'=>'1',
            'description'=> 'Twix',
            'prix'=>'2.00',  
            'Category_id'=>'2',
            ],
            [
            'name' => 'Tampax Pack 20 tampons',
            'slug' => 'divers',
            'image' => 'assets\images\Tampax20p.png',
            'qte'=>'1',
            'description'=> 'Discrétion & protection
                    De la gamme Tampax Compak clean system
                    Ouverture en V
                    Jupe de protection
                    Caneaux d’absorption
                    Applicateur rétractable',
            'prix'=>'2.00',  
            'Category_id'=>'2',
            ]
       
         ]);
       // $tags = App\Tag::orderByRaw('RAND()')->take(4)->get();
        
        /**factory(App\Product::class, 50)->create()->each(function($u) use ($tags){
          
            **foreach($tags as $tag)
            **{
            ** $u->tags()->attach($tag->id); 
   
           ** }
            
         **});
    *}
  }              */
}
}
