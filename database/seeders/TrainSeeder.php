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
            $train->company = fake()->company();
            $train->departure_station = fake()->city();
            $train->arrival_station = fake()->city();
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->train_code = fake()->regexify('[A-Z0-9]{7}');
            $train->carriages_num = rand(2, 10);
            $train->on_time = fake()->boolean();
            $train->deleted = fake()->boolean();
            $train->save();
        }
    }
}
