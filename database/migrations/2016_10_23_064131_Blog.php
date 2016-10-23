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
            $table->string('category',100);
            $table->timestamps();
            $table->integer('idUser')->unsigned();
            
            $table->foreign('idUser')->references('idUser')->on('User');
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
