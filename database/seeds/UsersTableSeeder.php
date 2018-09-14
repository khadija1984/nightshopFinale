<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'username'=>'khadija',
            'email'=>'chahinez1@outlook.fr',
            'password'=> bcrypt('secret'),
            'role'=>'admin',
            'bio'=>'bio',
        ]);
        
        factory(App\User::class, 10)->create();
    }
}
