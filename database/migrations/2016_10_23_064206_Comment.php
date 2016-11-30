<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comment', function (Blueprint $table) {
            $table->increments('idComment');
            $table->string('comment', 2000);
            $table->integer('idUser')->unsigned();
            $table->integer('idBlog')->unsigned();
            
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idBlog')->references('idBlog')->on('Blog');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comment');
    }
}
