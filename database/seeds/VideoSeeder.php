<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class VideoSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

		for($i = 1; $i<=10 ; $i++){
			\DB::connection('mysql')->table('videos')->insert([
				'title' => $faker->sentence(),
				'description' => $faker->paragraph(),
				'order' => $i,
			]);
		}
		// Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
