<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBathRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bath_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')->on('rooms')->references('id')->onDelete('cascade');
            $table->boolean('available')->default(true);
            $table->string('name');
            $table->enum('gender', ['female', 'male']);
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
        Schema::dropIfExists('bath_rooms');
    }
}
