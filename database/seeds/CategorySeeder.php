<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('Categoria')->insert([
    		'nombre' => 'Comida Mexicana',
    		]);
    	DB::table('Categoria')->insert([
    		'nombre' => 'Ensaladas',
    		]);
    	DB::table('Categoria')->insert([
    		'nombre' => 'Sandwiches',
    		]);
    	DB::table('Categoria')->insert([
    		'nombre' => 'Desayunos',
    		]);
    	DB::table('Categoria')->insert([
    		'nombre' => 'Postres',
    		]);
        //
    }
}
