<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_owner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phone');
            $table->string('address');
            $table->float('total_cost')->default('0.0');
            $table->unsignedInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users')->onDelete('cascade');
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
        // $table->dropForeign(['u_id']);
        Schema::dropIfExists('restaurant_owner');
    }
}
