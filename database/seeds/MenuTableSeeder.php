<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'nombre' => 'Comida Mexicana'
        ]);
        DB::table('menu')->insert([
            'nombre' => 'Ensaladas'
        ]);
        DB::table('menu')->insert([
            'nombre' => 'Sandwiches'
        ]);
        DB::table('menu')->insert([
            'nombre' => 'Desayunos'
        ]);
        DB::table('menu')->insert([
            'nombre' => 'Postres'
        ]);
    }
}
