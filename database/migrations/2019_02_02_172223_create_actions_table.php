<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('room_category_id')->nullable();
            $table->foreign('room_category_id')->on('room_categories')->references('id')->onDelete('cascade');
            $table->string('name');
            $table->unsignedTinyInteger('priority');
            $table->unsignedSmallInteger('wait_time')->default(0);
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
        Schema::dropIfExists('actions');
    }
}
