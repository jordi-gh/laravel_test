<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scans', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('longid', 30)->nullable()->unique('scans__akey');
			$table->dateTime('created')->nullable();
			$table->integer('service_id')->nullable();
			$table->text('url')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('process_time')->nullable();
			$table->string('result', 1)->nullable();
			$table->integer('agg_num_issues')->nullable();
			$table->integer('agg_score')->nullable();
			$table->integer('customer_paramset_id')->nullable();
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
		Schema::drop('scans');
	}

}
