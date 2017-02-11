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
            $table->timestamps();
            $table->string('email',15);
            $table->string('username',30);
            $table->string('password',30);
            $table->string('nickname',30)->nullable();
            $table->string('full_name',50);
            $table->mediumInteger('score');
            $table->enum('privilege',['ADMIN','USER','GUEST'])->default('ADMIN');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
