<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('avatar')->nullable();
            $table->binary('profile_image')->nullable();
            $table->string('name');
            $table->string('lastName',150)->nullable();;
            $table->string('nickName',100)->nullable();;
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthName')->nullable();;
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
