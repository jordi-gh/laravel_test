<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIssuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('sysid', 50)->nullable();
			$table->integer('scan_id')->nullable();
			$table->string('function_name', 100)->nullable();
			$table->char('created_by', 50)->nullable();
			$table->dateTime('created_on')->nullable();
			$table->string('updated_by', 50)->nullable();
			$table->dateTime('updated_on')->nullable();
			$table->integer('functionality_id')->nullable();
			$table->integer('severity_id')->nullable();
			$table->integer('bp_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('issues');
	}

}
