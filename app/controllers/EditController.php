<?php

class EditController extends Controller {

	public function show($city_id)
	{
		$city = City::find(1);
		$regions = Region::all();

		return View::make('show_city', ['city' => $city, 'regions' => $regions]);
	}

	public function edit()
	{
		$validation = Validator::make(Input::all(), ['region_id' => 'Integer|Min:1']);

		if ($validation->fails()) {
			//dd($validation->messages());
			return Redirect::back()->withErrors($validation);
		}
		$city = City::find(Input::get('city_id'));
		$city->region_id = Input::get('region_id');
		$city->save();

		return 'Record updated';
	}
}
