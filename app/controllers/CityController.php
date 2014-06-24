<?php

class CityController extends Controller {

	public function index()
	{
		$allCities = City::paginate(12);

		return View::make('hello', ['cities' => $allCities]);
	}
}
