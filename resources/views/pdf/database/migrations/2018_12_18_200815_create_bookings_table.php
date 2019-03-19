<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_id')->unsigned();

            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('registrations');
            $table->foreign('tour_id')->references('id')->on('tours');
            $table->string('b_class_c')->default('off');
            $table->string('p_room')->default('off');
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
        Schema::dropIfExists('bookings');
    }
}
