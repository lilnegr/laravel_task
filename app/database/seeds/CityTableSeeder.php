<?php
 
class CityTableSeeder extends Seeder {

	public function run()
	{
	 	$faker = Faker\Factory::create();
		for ($i = 0; $i < 100; $i++)
		{
	  		$region = City::create(array(
	    		'title' => $faker->city
	  		));
		}
  	}
}