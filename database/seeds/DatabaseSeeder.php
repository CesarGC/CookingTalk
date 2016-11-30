<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UserTableSeeder::class);
        $this->call(CategorySeeder::class);
    	$this->call(BlogTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(MenuTableSeeder::class);
    }
}
