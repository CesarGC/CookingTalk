<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('image')->insert([
            'urlImage' => 'http://mxcdn.ar-cdn.com/recipes/xlarge/01669b41-ea53-4243-b37f-dc5a6048ee60.jpg',
            'created_at' => '2015-02-10',
            'updated_at' => '2015-02-10',
            'idBlog' => '5'
        ]);

        DB::table('image')->insert([
            'urlImage' => 'http://mxcdn.ar-cdn.com/recipes/xlarge/af815bc6-c53b-408d-b3dc-d98277e6a282.jpg',
            'created_at' => '2015-02-12',
            'updated_at' => '2015-02-12',
            'idBlog' => '4'
        ]);

        DB::table('image')->insert([
            'urlImage' => 'http://mxcdn.ar-cdn.com/recipes/originalxl/109a9ab5-19bf-45e7-8ab9-3e52a76fb7b5.jpg',
            'created_at' => '2015-02-10',
            'updated_at' => '2015-02-10',
            'idBlog' => '3'
        ]);

        DB::table('image')->insert([
            'urlImage' => 'http://mxcdn.ar-cdn.com/recipes/xlarge/4042c0db-690f-45c0-a8ad-c80a58b475d1.jpg',
            'created_at' => '2015-04-05',
            'updated_at' => '2015-04-05',
            'idBlog' => '2'
        ]);

        DB::table('image')->insert([
            'urlImage' => 'http://mxcdn.ar-cdn.com/recipes/originalxl/2a08cb72-4f94-43df-b2d3-c69e5603ce98.jpg',
            'created_at' => '2015-06-11',
            'updated_at' => '2015-06-11',
            'idBlog' => '1'
        ]);
    }
}
