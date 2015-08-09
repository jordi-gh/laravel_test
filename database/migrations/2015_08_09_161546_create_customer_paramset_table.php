<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerParamsetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_paramset', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('service_id')->nullable();
			$table->integer('bp_set_id')->nullable();
			$table->integer('url_set_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_paramset');
	}

}
