<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fullname')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->integer('id_city')->nullable();
			$table->integer('id_center')->nullable();
			$table->boolean('study_ila')->default(0);
			$table->boolean('message')->nullable();
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
		Schema::drop('contacts');
	}

}
