<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('Comment')->insert([
            'comment' => 'Muy buena receta',
            'idUser' => '2',
            'idBlog' => '1',
            'created_at' => '2015-10-02'
        ]);

        DB::table('Comment')->insert([
            'comment' => 'Una opcion saludable',
            'idUser' => '1',
            'idBlog' => '2',
            'created_at' => '2015-02-14'
        ]);

        DB::table('Comment')->insert([
            'comment' => 'Facil de preparar',
            'idUser' => '3',
            'idBlog' => '2',
            'created_at' => '2015-12-22'
        ]);

        DB::table('Comment')->insert([
            'comment' => 'Los pasos para la preparacion son muy claros',
            'idUser' => '4',
            'idBlog' => '3',
            'created_at' => '2015-08-05'
        ]);

        DB::table('Comment')->insert([
            'comment' => 'Una receta practica',
            'idUser' => '5',
            'idBlog' => '4',
            'created_at' => '2016-01-02'
        ]);
    }
}
