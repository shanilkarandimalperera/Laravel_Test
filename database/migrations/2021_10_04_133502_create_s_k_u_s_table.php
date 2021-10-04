<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_k_u_s', function (Blueprint $table) {
            $table->id();
            $table->String('skuid');
            $table->String('skucode');
            $table->String('skuname');
            $table->String('mrp');
            $table->String('distributedprice');
            $table->String('weight');
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
        Schema::dropIfExists('s_k_u_s');
    }
}
