<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Candidate;
use App\Country;
use App\State;
use App\District;
use App\City;
use App\Locality;




class CandidatesTableSeeder extends Seeder
{
  public function run(Faker $faker)
  {



    $gender = ['Male', 'Female'];
    $salary = ['2000-4000', '3000-5000', '4000-7000', '5000-10000'];
    //$country = Country::where('id', 101)->first();
    

    for($i = 1; $i <= 200; $i++){



      //$state = State::where('country_id', 101)->whereIn('id', [10, 13, 33])->first();

      $city = City::whereIn('id', [706, 707, 2707, 2726, 2727, 5583, 1126, 2763, 4776, 5022, 4460, 3659, 4933, 3378, 3683, 5236, 4759, 1750, 1119])->inRandomOrder()->first();

      
      $locality = Locality::where('city_id', $city->id)->inRandomOrder()->first();






      $candidate = new Candidate;
      $candidate->name = $faker->name;
      //$candidate->state = $state->name;
      //$candidate->district = $city->name;
      $candidate->city = $city->name;
      $candidate->locality = $locality->name;
      $candidate->gender = $gender[mt_rand(0,1)];
      $candidate->salary = $salary[mt_rand(0,3)];
      $candidate->save();
    }
  }
}
