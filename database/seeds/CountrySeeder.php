<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('discipline');
        $countries = $data['countries'];
        foreach ($countries as $country) {
            $new_country = new Country();
            $new_country->name = $country['name'];
            $new_country->acronym = $country['acronym'];
            $new_country->save();
        }
    }
}
