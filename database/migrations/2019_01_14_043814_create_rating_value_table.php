<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_value', function (Blueprint $table) {
            // $table->increments('id');  
            $table->unsignedInteger('review_id');
            $table->unsignedInteger('rate_id');
            $table->timestamps();
            //$table->foreign('review_id');
            //$table->foreign('rate_id');
            $table->integer('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating_value');
    }
}
