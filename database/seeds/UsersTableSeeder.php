<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for( $i=1;$i<10;$i++)
    	{
    		DB::table('users')->insert([
            'name' => str_random(10),
            'email' => $i.'@gmail.com',
            'password' => bcrypt('123456'),
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
    	}
        
    }
}
