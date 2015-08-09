<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customers', function(Blueprint $table)
		{
			$table->foreign('customer_paramset_id', 'fk_customers__customer_paramset')->references('id')->on('customer_paramset')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('partner_id', 'fk_customers__partners')->references('id')->on('partners')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('qcadmin_paramset_id', 'fk_customers__qcadmin_paramset')->references('id')->on('qcadmin_paramset')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customers', function(Blueprint $table)
		{
			$table->dropForeign('fk_customers__customer_paramset');
			$table->dropForeign('fk_customers__partners');
			$table->dropForeign('fk_customers__qcadmin_paramset');
		});
	}

}
