<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([

                'username' => $faker->userName,
                'password' => Hash::make('123'),
                'api_key' => str_random(64)

			]);
		}
	}

}