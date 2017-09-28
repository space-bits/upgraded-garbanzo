<?php

use Illuminate\Database\Seeder;

class BikeStationSeeder extends Seeder
{
    /**
     * Run the bikedata seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; ++$i)
        {
            BikeStation::create([
                'id'=>$faker->id,
                'featurname'=>$faker->sentence,
                'latitude'=>$faker->float,
                'logtitude' => $faker->float,
                'nbbikes'=>$faker->integer,
                'nbemptydoc'=>$faker->integer,
                'terminalname'=>$faker->sentence,
                'uploaddate'=>$faker->datetime,
                'created_at'=>$faker->datetime,
                'updated_at'=>$faker->datetime
            ]);
        }
    }
}
