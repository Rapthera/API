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
            $table->integer('match_id');
            $table->string('player_name');
            $table->string('player_hero');
            $table->string('player_pet');
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
