<?php

use Illuminate\Database\Seeder;

class restaurants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert(
        	['name'=> "romdoul"],
        	['detail'=>"this is khmer restaurant"]);

    }
}
