<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class PromotionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

		for($i = 1; $i<=10 ; $i++){
			\DB::connection('mysql')->table('promotions')->insert([
				'title' => $faker->sentence(),
				'content' => $faker->paragraph(),
				'img_url' => $faker->imageUrl(600,315),
				'order' => $i,
			]);
		}
		// Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
