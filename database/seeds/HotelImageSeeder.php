<?php

use Illuminate\Database\Seeder;

class HotelImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for( $i=1;$i<5;$i++)
    	{
    		DB::table('hotel_images')->insert([
            'path' => $i.'.jpg',
            'hotel_id'=>'8'
        ]);
    	}
    }
}
