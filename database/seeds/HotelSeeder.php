<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=1;$i<10;$i++)
    	{
    		DB::table('hotels')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'star' => rand(1, 5),
            'description' => str_random(100)
        ]);
    	}
    }
}
