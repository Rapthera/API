<?php

use Faker\Factory as Faker;

class HeroesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('heroes')->delete();

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            $pets =
                [
                    'Bounder',
                    'Mystik',
                    'Pincer',
                    'Topps',
                    'Tortus',
                    'Fitz',
                    'Luster',
                    'Razer'
                ];

            $heroes =
                [
                    'Ace',
                    'Bastion',
                    'Blazer',
                    'Bo',
                    'Caprice',
                    'Carter',
                    'Claudessa',
                    'Fetterstone',
                    'Hale',
                    'Harrower',
                    'Lady Tinder',
                    'Malady',
                    'Minerva',
                    'Moxie',
                    'Ray',
                    'Rook',
                    'Shank',
                    'Trixie',
                    'Vermillion',
                    'Vex'
                ];

            $randPet = array_rand($pets);
            $randHero = array_rand($heroes);



            Hero::create([

                'match_id' => '1',
                'player_name' => $faker->userName,
                'player_hero' => $heroes[$randHero],
                'player_pet' => $pets[$randPet],

            ]);
        }
	}

}