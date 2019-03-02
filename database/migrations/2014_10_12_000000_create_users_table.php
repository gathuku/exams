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
            $table->unsignedInteger('role_id')->default(1);

            $table->string('name');
            $table->string('email')->unique();
            $table->string('regno')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('type')->nullable();
            $table->unsignedInteger('program_id')->nullable();
            $table->unsignedInteger('faculty_id')->nullable();
            $table->unsignedInteger('year_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
