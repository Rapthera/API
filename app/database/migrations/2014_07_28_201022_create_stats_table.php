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
            $this->integer('match_id');
            // First Player
            $this->string('player_name_1');
            $this->integer('player_kills_1');
            $this->integer('player_deaths_1');
            $this->integer('player_assists_1');
            $this->integer('player_gpm_1');

            // Second Player
            $this->string('player_name_2');
            $this->integer('player_kills_2');
            $this->integer('player_deaths_2');
            $this->integer('player_assists_2');
            $this->integer('player_gpm_2');

            // Third Player
            $this->string('player_name_3');
            $this->integer('player_kills_3');
            $this->integer('player_deaths_3');
            $this->integer('player_assists_3');
            $this->integer('player_gpm_3');

            // Fourth Player
            $this->string('player_name_4');
            $this->integer('player_kills_4');
            $this->integer('player_deaths_4');
            $this->integer('player_assists_4');
            $this->integer('player_gpm_4');

            // Fifth Player
            $this->string('player_name_5');
            $this->integer('player_kills_5');
            $this->integer('player_deaths_5');
            $this->integer('player_assists_5');
            $this->integer('player_gpm_5');

            // Sixth Player
            $this->string('player_name_6');
            $this->integer('player_kills_6');
            $this->integer('player_deaths_6');
            $this->integer('player_assists_6');
            $this->integer('player_gpm_6');

            // Seventh Player
            $this->string('player_name_7');
            $this->integer('player_kills_7');
            $this->integer('player_deaths_7');
            $this->integer('player_assists_7');
            $this->integer('player_gpm_7');

            // Eighth Player
            $this->string('player_name_8');
            $this->integer('player_kills_8');
            $this->integer('player_deaths_8');
            $this->integer('player_assists_8');
            $this->integer('player_gpm_8');

            // Ninth Player
            $this->string('player_name_9');
            $this->integer('player_kills_9');
            $this->integer('player_deaths_9');
            $this->integer('player_assists_9');
            $this->integer('player_gpm_9');

            // Tenth Player
            $this->string('player_name_10');
            $this->integer('player_kills_10');
            $this->integer('player_deaths_10');
            $this->integer('player_assists_10');
            $this->integer('player_gpm_10');

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
