<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class ImageSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
    $album = DB::connection('mysql')->table('albums')->select('id')->lists('id');
		for($i = 1; $i<=10 ; $i++){
			\DB::connection('mysql')->table('images')->insert([
				'title' => $faker->sentence(),
				'description' => $faker->paragraph(),
				'img_url' => $faker->imageUrl(600,315),
				'order' => $i,
        'album_id'=>$faker->randomElement($album),
			]);
		}
		// Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
