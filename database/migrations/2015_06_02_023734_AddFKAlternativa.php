<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKAlternativa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alternativa', function(Blueprint $table)
		{
			//MALDITO UNSIGNED!!!!
			$table->integer('questao_id')->unsigned();
			$table->foreign('questao_id')
				->references('id')->on('questao');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alternativa', function(Blueprint $table)
		{
			//
		});
	}

}
