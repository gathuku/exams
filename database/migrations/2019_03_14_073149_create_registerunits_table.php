<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterunitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerunits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regno');
            $table->string('unit_id');
            $table->string('semester_id')->nullable();
            $table->integer('mark')->default(0);
            $table->boolean('paid')->nullable();
            $table->string('grade')->default('-');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('registerunits');
    }
}
