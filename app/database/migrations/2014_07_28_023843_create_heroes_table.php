<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHeroesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('heroes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('match_id');
            $table->string('player_name_1');
            $table->string('player_hero_1');
            $table->string('player_pet_1');
            $table->string('player_name_2');
            $table->string('player_hero_2');
            $table->string('player_pet_2');
            $table->string('player_name_3');
            $table->string('player_hero_3');
            $table->string('player_pet_3');
            $table->string('player_name_4');
            $table->string('player_hero_4');
            $table->string('player_pet_4');
            $table->string('player_name_5');
            $table->string('player_hero_5');
            $table->string('player_pet_5');
            $table->string('player_name_6');
            $table->string('player_hero_6');
            $table->string('player_pet_6');
            $table->string('player_name_7');
            $table->string('player_hero_7');
            $table->string('player_pet_7');
            $table->string('player_name_8');
            $table->string('player_hero_8');
            $table->string('player_pet_8');
            $table->string('player_name_9');
            $table->string('player_hero_9');
            $table->string('player_pet_9');
            $table->string('player_name_10');
            $table->string('player_hero_10');
            $table->string('player_pet_10');
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
		Schema::drop('heroes');
	}

}
