<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerUrlSetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_url_set', function(Blueprint $table)
		{
			$table->integer('urlsetid');
			$table->text('url');
			$table->text('description')->nullable();
			$table->primary(['urlsetid','url'], 'customer_url_set__pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_url_set');
	}

}
