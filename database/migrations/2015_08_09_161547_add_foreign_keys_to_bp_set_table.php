<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBpSetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bp_set', function(Blueprint $table)
		{
			$table->foreign('bp_id', 'fk_bp_set__best_practices')->references('id')->on('best_practices')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('severity_id', 'fk_bp_set__severities')->references('id')->on('severities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bp_set', function(Blueprint $table)
		{
			$table->dropForeign('fk_bp_set__best_practices');
			$table->dropForeign('fk_bp_set__severities');
		});
	}

}
