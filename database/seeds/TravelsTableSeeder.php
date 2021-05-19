<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newTravel = new Travel();
            $newTravel->destination = $faker->state();
            $newTravel->date = $faker->dateTime();
            $newTravel->n_people = $faker->numberBetween(1, 6);
            $newTravel->days = $faker->numberBetween(1, 14);
            $newTravel->price = $faker->numberBetween(230, 560);
            $newTravel->save();
        }
    }
}
