<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
use DB;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

		for($i = 1; $i<10 ; $i++){
			DB::table('')->insert([

			]);
		}
		// Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
