<?php

class HeroesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('heroes')->delete();

        Hero::create
        ([
                'match_id' => '1',
                'player_name_1' => 'Kairus',
                'player_hero_1' => 'Minerva',
                'player_pet_1' => 'Tortus',
                'player_name_2' => 'Rapthera',
                'player_hero_2' => 'Bo',
                'player_pet_2' => 'Topps',
                'player_name_3' => 'Figulbka',
                'player_hero_3' => 'Vermillion',
                'player_pet_3' => 'Pincer',
                'player_name_4' => 'Hojona',
                'player_hero_4' => 'Caprice',
                'player_pet_4' => 'Mystik',
                'player_name_5' => 'BB-Milan',
                'player_hero_5' => 'Lady Tinder',
                'player_pet_5' => 'Mystik',
                'player_name_6' => 'Bhlox',
                'player_hero_6' => 'Lady Tinder',
                'player_pet_6' => 'Bounder',
                'player_name_7' => 'isucktoday',
                'player_hero_7' => 'Moxie',
                'player_pet_7' => 'Mystik',
                'player_name_8' => 'natsu',
                'player_hero_8' => 'Claudessa',
                'player_pet_8' => 'Tortus',
                'player_name_9' => 'broly',
                'player_hero_9' => 'Ray',
                'player_pet_9' => 'Mystik',
                'player_name_10' => 'reptilectric',
                'player_hero_10' => 'Fetterstone',
                'player_pet_10' => 'Tortus',


        ]);
	}

}