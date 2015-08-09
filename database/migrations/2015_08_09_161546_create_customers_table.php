<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100)->nullable();
			$table->integer('type')->nullable();
			$table->integer('customer_paramset_id')->nullable();
			$table->integer('partner_id')->nullable();
			$table->string('active_since', 8)->nullable();
			$table->string('status', 1)->nullable();
			$table->boolean('active')->nullable();
			$table->string('timezone', 50)->nullable();
			$table->string('language', 2)->nullable();
			$table->text('logo')->nullable();
			$table->string('company_url', 100)->nullable();
			$table->string('address1', 100)->nullable();
			$table->string('phone1', 100)->nullable();
			$table->string('contact_name', 50)->nullable();
			$table->integer('qcadmin_paramset_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
