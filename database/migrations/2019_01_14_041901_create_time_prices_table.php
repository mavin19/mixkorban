<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTimePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->float('minPrice')->nullable();
            $table->float('maxPrice')->nullable();
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
        Schema::dropIfExists('time_prices');
    }
}