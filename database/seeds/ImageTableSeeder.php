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
    	DB::table('Image')->insert([
            'urlImage' => 'imagenes/receta1.jpg',
            'created_at' => '2015-02-10',
            'updated_at' => '2015-02-10',
            'idBlog' => '5'
        ]);

        DB::table('Image')->insert([
            'urlImage' => 'imagenes/receta2.jpg',
            'created_at' => '2015-02-12',
            'updated_at' => '2015-02-12',
            'idBlog' => '4'
        ]);

        DB::table('Image')->insert([
            'urlImage' => 'imagenes/receta3.jpg',
            'created_at' => '2015-02-10',
            'updated_at' => '2015-02-10',
            'idBlog' => '3'
        ]);

        DB::table('Image')->insert([
            'urlImage' => 'imagenes/receta4.jpg',
            'created_at' => '2015-04-05',
            'updated_at' => '2015-04-05',
            'idBlog' => '2'
        ]);

        DB::table('Image')->insert([
            'urlImage' => 'imagenes/receta5.jpg',
            'created_at' => '2015-06-11',
            'updated_at' => '2015-06-11',
            'idBlog' => '1'
        ]);
    }
}
