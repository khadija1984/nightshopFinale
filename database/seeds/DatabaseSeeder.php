<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

       // $this->call(UsersTableSeeder::class);

       /* $this->call([
	        UsersTableSeeder::class,
	       	CategoriesTableSeeder::class,
	       	BrandsTableSeeder::class,
	       	TagsTableSeeder::class,
	       	ProductsTableSeeder::class,
	       	PromotionsTableSeeder::class,
	       	VisuelsTableSeeder::class,
            PagesTableSeeder::class,
	    ]);
*/
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
        $this->call(VisuelsTableSeeder::class);
        
        Model::reguard();

    }
}
