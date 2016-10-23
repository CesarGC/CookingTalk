<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Video extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Video', function (Blueprint $table) {
            $table->increments('idVideo');
            $table->string('urlVideo', 1000);
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
        Schema::dropIfExists('Video');
    }
}
