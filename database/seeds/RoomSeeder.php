<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'name' => 'VIP',
            'price' => '100000',
            'guest' => '4',
            'bed' => '2',
            'active' => 'Trống'
        ]);
    }
}
