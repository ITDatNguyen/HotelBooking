<?php

use Illuminate\Database\Seeder;

class TypeRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('room_types')->insert([
        	[
				'name' => 'VIP',
            ]
            
		]);
    }
}
