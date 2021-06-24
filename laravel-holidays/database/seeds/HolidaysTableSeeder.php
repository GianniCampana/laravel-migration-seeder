<?php

use App\Holiday;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 100 ; $i++) { 

            $new_holiday = new Holiday();
            $new_holiday->hotel = "Monviso";
            $new_holiday->city = $faker->city();
            $new_holiday->state = $faker->state();
            $new_holiday->period = "10/10/2020-20/10/2020";
            $new_holiday->date = "10/10/2020";
            $new_holiday->description = "La vacanza dei tuoi sogni";
            $new_holiday->review = "Ci sono stato l' anno scorso, posto bellissimo e accogliente";
            $new_holiday->price = $faker->randomFloat(2,100,1000);
            $new_holiday->save();
        }

       
    }
}
