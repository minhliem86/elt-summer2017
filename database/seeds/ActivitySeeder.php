<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class ActivitySeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		$center = DB::connection('corporat_ref')->table('center')->select('id')->lists('id');
		for($i = 1; $i<=3 ; $i++){
			\DB::connection('mysql')->table('activities')->insert([
				'title' => $faker->sentence(),
				'content' => $faker->paragraph(),
				'img_url' => $faker->imageUrl(400,400),
				'img_fb_thumb' => $faker->imageUrl(600,315),
				'order' => $i,
				'center_id'=>$faker->randomElement($center),
			]);
		}
		// Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
