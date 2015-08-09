<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeveritiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('severities', function(Blueprint $table)
		{
			$table->integer('id')->primary('severities__pkey');
			$table->string('name', 100)->nullable();
			$table->string('nameid', 1)->nullable()->unique('severities__akey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('severities');
	}

}
