<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(['name'=>"Sokhey"],
    		['email'=>"Sokhey@gmail.com"],
    		['password'=>bcrypt('12345')]);
    }
}
