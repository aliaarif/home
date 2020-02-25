<?php

use Illuminate\Database\Seeder;
use App\Country;
use App\State;
use App\City;
use App\Locality;

class LocalitiesTableSeeder extends Seeder
{
	public function run()
	{
		
		for($i = 1; $i <= 100; $i++)
		{
			//$country = Country::where('id', 101)->first();
			//$state = State::where('country_id', 101)->whereIn('id', [10, 13, 33])->first();
			//$district = City::whereIn('state_id', [10, 13])->inRandomOrder()->first();
			$city = City::whereIn('id', [706, 707, 2707, 2726, 2727, 5583, 1126, 2763, 4776, 5022, 4460, 3659, 4933, 3378, 3683, 5236, 4759, 1750, 1119])->inRandomOrder()->first();
			
			$locality = new Locality;
			$locality->city_id = $city->id;
			$locality->name = 'Sector '.$i;
			$locality->save();
		}

	}
}
