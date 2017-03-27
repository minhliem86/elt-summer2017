<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class CenterActivitySeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

    $activity = DB::connection('mysql')->table('activities')->select('id')->lists('id');
    $center = DB::connection('corporat_ref')->table('center')->select('id')->lists('id');

		for($i = 1; $i<=5 ; $i++){
			\DB::connection('mysql')->table('center_activity')->insert([
				'center_id' => $faker->randomElement($center),
				'activity_id' => $faker->randomElement($activity),
			]);
		}
		// Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
