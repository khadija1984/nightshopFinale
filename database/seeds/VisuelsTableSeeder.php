<?php

use Illuminate\Database\Seeder;

class VisuelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Visuel::class, 150)->create();
    }
}
