<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClasscodeToKiddomscheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kiddom_schedules', function(Blueprint $table)
		{
			$table->integer('class_code')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kiddom_schedules', function(Blueprint $table)
		{
			$table->dropColumn('class_code');
		});
	}

}
