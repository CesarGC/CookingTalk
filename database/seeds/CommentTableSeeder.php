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
    	DB::table('comment')->insert([
            'comment' => 'Muy buena receta',
            'date_comment' => '2015-10-02',
            'idUser' => '2',
            'idBlog' => '1',
            'created_at' => '2015-10-02'
        ]);

        DB::table('comment')->insert([
            'comment' => 'Una opcion saludable',
            'date_comment' => '2015-02-14',
            'idUser' => '1',
            'idBlog' => '2',
            'created_at' => '2015-02-14'
        ]);

        DB::table('comment')->insert([
            'comment' => 'Facil de preparar',
            'date_comment' => '2015-12-22',
            'idUser' => '3',
            'idBlog' => '2',
            'created_at' => '2015-12-22'
        ]);

        DB::table('comment')->insert([
            'comment' => 'Los pasos para la preparacion son muy claros',
            'date_comment' => '2015-08-05',
            'idUser' => '4',
            'idBlog' => '3',
            'created_at' => '2015-08-05'
        ]);

        DB::table('comment')->insert([
            'comment' => 'Una receta practica',
            'date_comment' => '2016-01-02',
            'idUser' => '5',
            'idBlog' => '4',
            'created_at' => '2016-01-02'
        ]);
    }
}
