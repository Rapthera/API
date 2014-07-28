<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        DB::table('users')->delete();

        User::create
        ([
                'username' => 'Rapthera',
                'password' => Hash::make('123'),
        ]);
	}

}