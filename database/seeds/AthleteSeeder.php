<?php

use App\Athlete;
use Illuminate\Database\Seeder;

class AthleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('discipline');
        $athletes = $data['athletes'];
        foreach ($athletes as $athlete) {
            $new_athlete = new Athlete();
            $new_athlete->name = $athlete['name'];
            $new_athlete->genre = $athlete['genre'];
            $new_athlete->save();
        }
    }
}
