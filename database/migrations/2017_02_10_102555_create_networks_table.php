<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ssid',15);
            $table->string('location',50);
            $table->integer('added_by_user_id')->unsigned();
            $table->foreign('added_by_user_id')->references('id')->on('users');
            $table->enum('privacy',['PRIVATE','PUBLIC','REQ_KEY'])->default('PRIVATE');
            $table->boolean('admin_verified')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('networks');
    }
}
