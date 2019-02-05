<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_imgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_loc');
            $table->timestamps();
            $table->unsignedInteger('res_id');
            $table->foreign('res_id')->references('id')->on('restaurants')->onDe1ete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_imgs');
    }
}
