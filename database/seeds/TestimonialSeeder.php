<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class TestimonialSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

		for($i = 1; $i<=10 ; $i++){
			\DB::connection('mysql')->table('testimonials')->insert([
				'title' => $faker->sentence(),
				'content' => $faker->paragraph(),
				'img_url' => $faker->imageUrl(400,400),
				'img_fb_thumb' => $faker->imageUrl(600,315),
				'order' => $i,
			]);
		}

	}

}
