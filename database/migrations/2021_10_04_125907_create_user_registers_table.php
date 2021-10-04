<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registers', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('nic')->unique();
            $table->String('address')->nullable();
            $table->integer('mobile')->nullable();
            $table->String('email')->nullable();
            $table->String('Gender')->nullable();
            $table->String('territory')->nullable();
            $table->String('username')->nullable();
            $table->String('password')->nullable();
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
        Schema::dropIfExists('user_registers');
    }
}
