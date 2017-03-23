<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class ScheduleSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
    $activity = DB::connection('mysql')->table('activities')->select('id')->lists('id');
		for($i = 1; $i<=10 ; $i++){
			\DB::connection('mysql')->table('schedules')->insert([
				'date' => $faker->dateTime(),
				'location' => $faker->address(),
				'order' => $i,
        'activity_id'=>$faker->randomElement($activity),
			]);
		}
		// Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
