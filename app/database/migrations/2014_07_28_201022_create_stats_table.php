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
            $this->string('match_id');
            $this->string('player_name_1');
            $this->string('player_kills_1');
            $this->string('player_deaths_1');
            $this->string('player_assists_1');
            $this->string('player_name_2');
            $this->string('player_kills_2');
            $this->string('player_deaths_2');
            $this->string('player_assists_2');
            $this->string('player_name_3');
            $this->string('player_kills_3');
            $this->string('player_deaths_3');
            $this->string('player_assists_3');
            $this->string('player_name_4');
            $this->string('player_kills_4');
            $this->string('player_deaths_4');
            $this->string('player_assists_4');
            $this->string('player_name_5');
            $this->string('player_kills_5');
            $this->string('player_deaths_5');
            $this->string('player_assists_5');
            $this->string('player_name_6');
            $this->string('player_kills_6');
            $this->string('player_deaths_6');
            $this->string('player_assists_6');
            $this->string('player_name_7');
            $this->string('player_kills_7');
            $this->string('player_deaths_7');
            $this->string('player_assists_7');
            $this->string('player_name_8');
            $this->string('player_kills_8');
            $this->string('player_deaths_8');
            $this->string('player_assists_8');
            $this->string('player_name_9');
            $this->string('player_kills_9');
            $this->string('player_deaths_9');
            $this->string('player_assists_9');
            $this->string('player_name_10');
            $this->string('player_kills_10');
            $this->string('player_deaths_10');
            $this->string('player_assists_10');
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
