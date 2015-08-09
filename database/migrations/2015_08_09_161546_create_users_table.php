<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 50)->nullable();
			$table->string('mid_name', 50)->nullable();
			$table->string('last_name', 50)->nullable();
			$table->integer('profile_id')->nullable();
			$table->integer('customer_id')->nullable();
			$table->string('status', 1)->nullable();
			$table->boolean('active')->nullable();
			$table->text('image')->nullable();
			$table->dateTime('last_logged')->nullable();
			$table->string('username_qc', 50)->nullable();
			$table->string('hashpwd_qc', 256)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
