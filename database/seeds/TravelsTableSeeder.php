<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i<20; $i++) {
            $new_travel = new Travel();
            $new_travel->departure_date = $faker->dateTime();
            $new_travel->arrival_date = $faker->dateTime();
            $new_travel->city_departure = $faker->city();
            $new_travel->city_arrival = $faker->city();
            $new_travel->price = $faker->randomFloat(2, 2, 1000);
            $new_travel->save();
        }
    }
}
