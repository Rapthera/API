<?php

class StatsTableSeeder extends Seeder {

	public function run()
    {
        DB::table('stats')->delete();

        Stat::create
            ([
                'match_id' => 1,

                // Player Seed 1
                'player_name_1' => 'Kairus',
                'player_kills_1' => '19',
                'player_deaths_1' => '6',
                'player_assists_1' => '22',
                'player_gpm_1' => '639',

                // Player Seed 2
                'player_name_2' => 'Rapthera',
                'player_kills_2' => '12',
                'player_deaths_2' => '8',
                'player_assists_2' => '32',
                'player_gpm_2' => '569',

                // Player Seed 3
                'player_name_3' => 'Figulbka',
                'player_kills_3' => '14',
                'player_deaths_3' => '9',
                'player_assists_3' => '26',
                'player_gpm_3' => '589',

                // Player Seed 4
                'player_name_4' => 'Hojona',
                'player_kills_4' => '9',
                'player_deaths_4' => '9',
                'player_assists_4' => '34',
                'player_gpm_4' => '520',

                // Player Seed 5
                'player_name_5' => 'BB-Milan',
                'player_kills_5' => '26',
                'player_deaths_5' => '12',
                'player_assists_5' => '33',
                'player_gpm_5' => '679',

                // Player Seed 6
                'player_name_6' => 'Bhlox',
                'player_kills_6' => '24',
                'player_deaths_6' => '2',
                'player_assists_6' => '37',
                'player_gpm_6' => '633',

                // Player Seed 7
                'player_name_7' => 'isucktoday',
                'player_kills_7' => '16',
                'player_deaths_7' => '12',
                'player_assists_7' => '25',
                'player_gpm_7' => '605',

                // Player Seed 8
                'player_name_8' => 'natsu',
                'player_kills_8' => '20',
                'player_deaths_8' => '11',
                'player_assists_8' => '33',
                'player_gpm_8' => '500',

                // Player Seed 9
                'player_name_9' => 'broly',
                'player_kills_9' => '24',
                'player_deaths_9' => '12',
                'player_assists_9' => '29',
                'player_gpm_9' => '599',

                // Player Seed 10
                'player_name_10' => 'reptilectric',
                'player_kills_10' => '22',
                'player_deaths_10' => '22',
                'player_assists_10' => '23',
                'player_gpm_10' => '500',


            ]);

	}

}