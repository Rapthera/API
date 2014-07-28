<?php

class StatsTableSeeder extends Seeder {

	public function run()
    {
        DB::table('stats')->delete();

        Stat::create
            ([
                'match_id' => 1,
                'player_name_1' => '',
                'player_kills_1' => '',
                'player_deaths_1' => '',
                'player_assists_1' => '',
                'player_gpm_1' => '',
                'player_name_2' => '',
                'player_kills_2' => '',
                'player_deaths_2' => '',
                'player_assists_2' => '',
                'player_gpm_2' => '',
                'player_name_3' => '',
                'player_kills_3' => '',
                'player_deaths_3' => '',
                'player_assists_3' => '',
                'player_gpm_3' => '',
                'player_name_4' => '',
                'player_kills_4' => '',
                'player_deaths_4' => '',
                'player_assists_4' => '',
                'player_gpm_4' => '',
                'player_name_5' => '',
                'player_kills_5' => '',
                'player_deaths_5' => '',
                'player_assists_5' => '',
                'player_gpm_5' => '',
                'player_name_6' => '',
                'player_kills_6' => '',
                'player_deaths_6' => '',
                'player_assists_6' => '',
                'player_gpm_6' => '',
                'player_name_7' => '',
                'player_kills_7' => '',
                'player_deaths_7' => '',
                'player_assists_7' => '',
                'player_gpm_7' => '',
                'player_name_8' => '',
                'player_kills_8' => '',
                'player_deaths_8' => '',
                'player_assists_8' => '',
                'player_gpm_8' => '',
                'player_name_9' => '',
                'player_kills_9' => '',
                'player_deaths_9' => '',
                'player_assists_9' => '',
                'player_gpm_9' => '',
                'player_name_10' => '',
                'player_kills_10' => '',
                'player_deaths_10' => '',
                'player_assists_10' => '',
                'player_gpm_10' => '',


            ]);

	}

}