<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersLicenseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers_license', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('type')->nullable();
			$table->string('start_date', 8)->nullable();
			$table->string('end_date', 8)->nullable();
			$table->integer('customer_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers_license');
	}

}
