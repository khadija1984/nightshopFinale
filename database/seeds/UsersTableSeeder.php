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
            'password'=> bcrypt('21012010chahinez'),
            'role'=>'admin',
            'bio'=>'bio',
            'Rue'=>'Rue van gulick, 2',
            'codePostale'=>'1020',
            'latitude'=>'50.872911',
            'longitude'=>'4.357102',
        ]);
       DB::table('users')->insert([
            'username'=>'Nightshop1',
            'email'=>'tarik_acar05@hotmail.com',
            'password'=> bcrypt('123test'),
            'role'=>'nightshop',
            'bio'=>'bio',
            'Rue'=>'Rue Marie-Christine, 128',
            'codePostale'=>'1020',
            'latitude'=>'50.875534',
            'longitude'=>'4.353314',
        ]);
       DB::table('users')->insert([
            'username'=>'Nightshop2',
            'email'=>'khadija_hamama@hotmail.com',
            'password'=> bcrypt('123test'),
            'role'=>'nightshop',
            'bio'=>'bio',
            'Rue'=>'Rue Marie-Christine, 14',
            'codePostale'=>'1020',
            'latitude'=>'50.873729',
            'longitude'=>'4.358945',
        ]);
        DB::table('users')->insert([
            'username'=>'Nightshop3',
            'email'=>'khadijahamama48@gmail.com',
            'password'=> bcrypt('123test'),
            'role'=>'nightshop',
            'bio'=>'bio',
            'Rue'=>'Rue Marie-Christine, 34',
            'codePostale'=>'1020',
            'latitude'=>'50.874038',
            'longitude'=>'4.357298',
        ]);
        DB::table('users')->insert([
            'username'=>'Nightshop4',
            'email'=>'nightshop@hotmail.com',
            'password'=> bcrypt('123test'),
            'role'=>'nightshop',
            'bio'=>'bio',
            'Rue'=>'Rue Marie-Christine, 50',
            'codePostale'=>'1020',
            'latitude'=>'50.874260',
            'longitude'=>'4.356801',
        ]);
        DB::table('users')->insert([
            'username'=>'Nightshop5',
            'email'=>'nightshop1@hotmail.com',
            'password'=> bcrypt('123test'),
            'role'=>'nightshop',
            'bio'=>'bio',
            'Rue'=>'Boulevard Emile Bockstael 284',
            'codePostale'=>'1000',
            'latitude'=>'50.879269',
            'longitude'=>'4.347562',
        ]);
        DB::table('users')->insert([
            'username'=>'Nightshop6',
            'email'=>'nightshop2@hotmail.com',
            'password'=> bcrypt('123test'),
            'role'=>'nightshop',
            'bio'=>'bio',
            'Rue'=>'Rue Marie-Christine, 23',
            'codePostale'=>'1020',
            'latitude'=>'50.874252',
            'longitude'=>'4.357736',
        ]);
        
        factory(App\User::class, 10)->create();
    }
}
