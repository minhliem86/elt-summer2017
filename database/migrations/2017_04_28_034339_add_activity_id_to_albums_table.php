<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivityIdToAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('albums', function(Blueprint $table)
		{
			$table->string('img_url')->nullable();
			$table->integer('activity_id')->unsigned();
			$table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('albums', function(Blueprint $table)
		{
			$table->dropColumn('img_url');
			$table->dropForeign('albums_activity_id_foreign');
			$table->dropColumn('activity_id');
		});
	}

}
