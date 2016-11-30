<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Blog', function (Blueprint $table) {
            $table->increments('idBlog');
            $table->string('title',500);
            $table->string('summary',2000);
            $table->string('content',10000);
            $table->timestamps();
            $table->integer('idUser')->unsigned();
            $table->integer('idCategoria')->unsigned();
            
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idCategoria')->references('idCategoria')->on('Categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Blog');
    }
}
