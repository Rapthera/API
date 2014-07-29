<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stats', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('match_id');
            // First Player
            $table->string('player_name_1');
            $table->integer('player_kills_1');
            $table->integer('player_deaths_1');
            $table->integer('player_assists_1');
            $table->integer('player_gpm_1');

            // Second Player
            $table->string('player_name_2');
            $table->integer('player_kills_2');
            $table->integer('player_deaths_2');
            $table->integer('player_assists_2');
            $table->integer('player_gpm_2');

            // Third Player
            $table->string('player_name_3');
            $table->integer('player_kills_3');
            $table->integer('player_deaths_3');
            $table->integer('player_assists_3');
            $table->integer('player_gpm_3');

            // Fourth Player
            $table->string('player_name_4');
            $table->integer('player_kills_4');
            $table->integer('player_deaths_4');
            $table->integer('player_assists_4');
            $table->integer('player_gpm_4');

            // Fifth Player
            $table->string('player_name_5');
            $table->integer('player_kills_5');
            $table->integer('player_deaths_5');
            $table->integer('player_assists_5');
            $table->integer('player_gpm_5');

            // Sixth Player
            $table->string('player_name_6');
            $table->integer('player_kills_6');
            $table->integer('player_deaths_6');
            $table->integer('player_assists_6');
            $table->integer('player_gpm_6');

            // Seventh Player
            $table->string('player_name_7');
            $table->integer('player_kills_7');
            $table->integer('player_deaths_7');
            $table->integer('player_assists_7');
            $table->integer('player_gpm_7');

            // Eighth Player
            $table->string('player_name_8');
            $table->integer('player_kills_8');
            $table->integer('player_deaths_8');
            $table->integer('player_assists_8');
            $table->integer('player_gpm_8');

            // Nintegerh Player
            $table->string('player_name_9');
            $table->integer('player_kills_9');
            $table->integer('player_deaths_9');
            $table->integer('player_assists_9');
            $table->integer('player_gpm_9');

            // Tenth Player
            $table->string('player_name_10');
            $table->integer('player_kills_10');
            $table->integer('player_deaths_10');
            $table->integer('player_assists_10');
            $table->integer('player_gpm_10');

            // Timestamps
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stats');
	}

}
