<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	[
			'name' => 'admin',
            'description' =>'Quản lý hệ thống',
        	],
            [
			'name' => 'user',
            'description' =>'Người dùng',
            ],
            [
			'name' => 'manager',
            'description' =>'Quản lý khách sạn',
            ]
		]);
    }
}
