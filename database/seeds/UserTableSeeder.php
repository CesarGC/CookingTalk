<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('user')->insert([
            'name' => 'Cesar',
            'nickName' => 'Cesar',
            'lastName' => 'Garcia',
            'email' => 'cesargc0507@gmail.com',
            'password' => bcrypt('secret'),
            'birthName' => '1994-07-05'
        ]);

        DB::table('user')->insert([
            'name' => 'Israel',
            'nickName' => 'Israel',
            'lastName' => 'Martinez',
            'email' => 'israel@gmail.com',
            'password' => bcrypt('secret'),
            'birthName' => '1994-09-02'
        ]);

        DB::table('user')->insert([
            'name' => 'Ulises',
            'nickName' => 'Ulises',
            'lastName' => 'Garcia',
            'email' => 'ulises@gmail.com',
            'password' => bcrypt('secret'),
            'birthName' => '1998-05-12'
        ]);

        DB::table('user')->insert([
            'name' => 'Eduardo',
            'nickName' => 'Eduardo',
            'lastName' => 'Rodriguez',
            'email' => 'eduardo@gmail.com',
            'password' => bcrypt('secret'),
            'birthName' => '1993-11-18'
        ]);

        DB::table('user')->insert([
            'name' => 'Aldo',
            'nickName' => 'Aldo',
            'lastName' => 'Gutierrez',
            'email' => 'aldo@gmail.com',
            'password' => bcrypt('secret'),
            'birthName' => '1990-08-12'
        ]);
    }
}
