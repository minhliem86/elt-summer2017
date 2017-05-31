<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreateKiddomSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kiddom_schedules', function(Blueprint $table)
		{
			$db2 = \DB::connection('corporat_ref')->getDatabaseName();

			$table->increments('id');
			$table->text('schedule')->nullable();
			$table->integer('center_id');
			$table->foreign('center_id')->references('id')->on(new Expression($db2.'.center'));
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kiddom_schedules');
	}

}
