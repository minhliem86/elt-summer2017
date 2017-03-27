<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreateSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('mysql')->create('schedules', function(Blueprint $table)
		{
			$db2 = \DB::connection('corporat_ref')->getDatabaseName();

			$table->increments('id');
			$table->date('date')->nullable();
			$table->string('location')->nullable();
			$table->integer('order')->nullable()->default(0);
			$table->boolean('status')->nullable()->default(1);
			$table->integer('center_id');
			$table->foreign('center_id')->references('id')->on(new Expression($db2.'.center'))->onDelete('cascade');
			$table->integer('scheduleable_id');
			$table->string('scheduleable_type');

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
		Schema::connection('mysql')->drop('schedules');
	}

}
