<?php

use Illuminate\Database\Seeder;

class DetailBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_bookings')->insert([
            'duration_of_stay' => '5',
            'check_in' => date('Y-m-d H:i:s'),
            'check_out' => date('Y-m-d H:i:s'),
            'no_of_room' => '4',
            'guest_per_room' => '5'
            
        ]);
    }
}
