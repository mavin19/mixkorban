<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedBigInteger('card_number');
            $table->date('expire_date');
            $table->unsignedSmallInteger('cvv');
            $table->string('street_address');
            $table->string('city');
            $table->string('state_region');
            $table->unsignedSmallInteger('postal_code');
            $table->string('country');
            $table->unsignedSmallInteger('phone');
            $table->unsignedInteger('owner_id');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('restaurant_owners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->dropForeign(['owner_id']);
        Schema::dropIfExists('bill_infos');
    }
}
