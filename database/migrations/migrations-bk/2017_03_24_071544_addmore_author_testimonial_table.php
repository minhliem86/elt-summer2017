<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddmoreAuthorTestimonialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('mysql')->table('testimonials', function(Blueprint $table)
		{
			$table->string('author')->nullable()->after('slug');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('mysql')->table('testimonials', function(Blueprint $table)
		{
			$table->dropColumn('author');
		});
	}

}
