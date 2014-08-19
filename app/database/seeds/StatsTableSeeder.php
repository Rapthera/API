<?php
use Faker\Factory as Faker;

class StatsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Stat::create([
                'match_id' => 1,
                'player_name' => $faker->userName,
                'player_kills' => rand(1, 30),
                'player_deaths' => rand(1, 14),
                'player_assists' => rand(1, 50),
                'player_gpm' => rand(300, 900)

			]);
		}
	}

}