<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Train::truncate();

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = fake()->words(rand(1, 3));
            $train->departure_station = fake()->words(rand(1, 5));
            $train->arrival_station = fake()->words(rand(1, 5));
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->train_code = fake()->lexify();
            $train->carriages_num = fake()->randomNumber();
            $train->on_time = fake()->boolean();
            $train->deleted = fake()->boolean();
            $train->save();
        }
    }
}
