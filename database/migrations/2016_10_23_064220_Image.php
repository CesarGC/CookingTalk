<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Image extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Image', function (Blueprint $table) {
            $table->increments('idImage');
            $table->string('urlImage', 1000);
            $table->timestamps();

            $table->integer('idBlog')->unsigned();
            
            $table->foreign('idBlog')->references('idBlog')->on('Blog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Image');
    }
}
