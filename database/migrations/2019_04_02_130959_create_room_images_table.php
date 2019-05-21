<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('image2');
            $table->string('image3');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_images');
    }
}
