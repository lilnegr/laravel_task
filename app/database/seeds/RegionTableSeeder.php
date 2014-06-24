<?php
 
class RegionTableSeeder extends Seeder {

	public function run()
	{
	 	$faker = Faker\Factory::create();
		for ($i = 0; $i < 100; $i++)
		{
	  		$region = Region::create(array(
	    		'title' => $faker->state,
	    		'count' => 0,
	  		));
		}
  	}
}