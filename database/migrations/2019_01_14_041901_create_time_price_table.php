<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_price', function (Blueprint $table) {
            $table->increments('id');
            $table->string('currency');
            $table->float('minPrice');
            $table->float('maxPrice');
            $table->time('openTime');
            $table->time('closeTime');
            $table->unsignedInteger('res_id');
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
        Schema::dropIfExists('time_price');
    }
}
