<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('PromotionSeeder');
		$this->call('ActivitySeeder');
		$this->call('AlbumSeeder');
		$this->call('TestimonialSeeder');
		$this->call('VideoSeeder');
		$this->call('ImageSeeder');
		$this->call('ScheduleSeeder');
		$this->call('CenterActivitySeeder');
	}

}
