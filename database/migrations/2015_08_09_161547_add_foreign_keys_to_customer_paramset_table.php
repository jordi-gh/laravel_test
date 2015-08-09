<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerParamsetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customer_paramset', function(Blueprint $table)
		{
			$table->foreign('service_id', 'fk_customer_paramset__services')->references('id')->on('services')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customer_paramset', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_paramset__services');
		});
	}

}
