<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToScansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('scans', function(Blueprint $table)
		{
			$table->foreign('service_id', 'fk_scans__services')->references('id')->on('services')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('customer_paramset_id', 'fk_scans__customer_paramset')->references('id')->on('customer_paramset')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('qcadmin_paramset_id', 'fk_scans__qcadmin_paramset')->references('id')->on('qcadmin_paramset')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('scans', function(Blueprint $table)
		{
			$table->dropForeign('fk_scans__services');
			$table->dropForeign('fk_scans__customer_paramset');
			$table->dropForeign('fk_scans__qcadmin_paramset');
		});
	}

}
