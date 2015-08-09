<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIssuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('issues', function(Blueprint $table)
		{
			$table->foreign('scan_id', 'fk_issues__scans')->references('id')->on('scans')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('functionality_id', 'fk_issues__functionalities')->references('id')->on('functionalities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('severity_id', 'fk_issues__severityies')->references('id')->on('severities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('bp_id', 'fk_issues__best_practices')->references('id')->on('best_practices')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('issues', function(Blueprint $table)
		{
			$table->dropForeign('fk_issues__scans');
			$table->dropForeign('fk_issues__functionalities');
			$table->dropForeign('fk_issues__severityies');
			$table->dropForeign('fk_issues__best_practices');
		});
	}

}
