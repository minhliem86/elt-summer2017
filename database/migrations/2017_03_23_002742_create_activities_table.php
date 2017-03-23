<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('mysql')->create('activities', function(Blueprint $table)
		{
			$db2 = \DB::connection('corporat_ref')->getDatabaseName();

			$table->increments('id');
			$table->string('title')->nullable();
			$table->text('content')->nullable();
			$table->string('img_url')->nullable();
			$table->string('img_fb_thumb')->nullable();
			$table->integer('order')->nullable()->default(0);
			$table->boolean('status')->nullable()->default(1);
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
		Schema::connection('mysql')->drop('activities');
	}

}
