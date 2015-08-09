<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBestPracticesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('best_practices', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100)->nullable();
			$table->string('nameid', 10)->nullable()->unique('best_practices__akey');
			$table->boolean('edit_admin')->nullable();
			$table->boolean('edit_customer')->nullable();
			$table->integer('area_id')->nullable();
			$table->integer('def_severity_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('best_practices');
	}

}
