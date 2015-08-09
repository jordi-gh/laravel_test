<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBpSetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bp_set', function(Blueprint $table)
		{
			$table->integer('bpsetid');
			$table->integer('bp_id');
			$table->integer('severity_id')->nullable();
			$table->primary(['bpsetid','bp_id'], 'bp_set__pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bp_set');
	}

}
