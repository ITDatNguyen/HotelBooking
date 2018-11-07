<?php

use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
        	[
				'name' => 'wifi',
            ],
            [
				'name' => 'Bãi đậu xe',
            ],
            [
				'name' => 'Hồ bơi',
            ],
            [
				'name' => 'Thang máy',
            ],
            [
				'name' => 'Nhà hàng',
            ]
            
		]);
    }
}
