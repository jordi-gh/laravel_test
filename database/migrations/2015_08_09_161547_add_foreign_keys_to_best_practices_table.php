<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBestPracticesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('best_practices', function(Blueprint $table)
		{
			$table->foreign('def_severity_id', 'fk_best_practices__severities')->references('id')->on('severities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('best_practices', function(Blueprint $table)
		{
			$table->dropForeign('fk_best_practices__severities');
		});
	}

}
