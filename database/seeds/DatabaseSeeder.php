<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; ++$i){
            BikeStation::create([
                'id'=>$faker->id,
                'featurname'=>$faker->name
            ]);
        }
    }
}
