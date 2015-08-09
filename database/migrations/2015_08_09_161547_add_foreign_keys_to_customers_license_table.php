<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersLicenseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customers_license', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customers_license__customers')->references('id')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customers_license', function(Blueprint $table)
		{
			$table->dropForeign('fk_customers_license__customers');
		});
	}

}
