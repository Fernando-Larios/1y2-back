<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_queues', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('action_id')->nullable();
            $table->foreign('action_id')->on('actions')->references('id')->onDelete('cascade');
            $table->unsignedInteger('room_id')->nullable();
            $table->foreign('room_id')->on('rooms')->references('id')->onDelete('cascade');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->enum('status', ['completed', 'in_progress', 'pending'])->default('pending');
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
        Schema::dropIfExists('reservation_queues');
    }
}
