<?php

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $car = new Car();
            $car->create(array(
//                'car_make_id' => rand(1, 114),
//                'car_model_id' => rand(1, 1487),
                'car_make_id' => 36,
                'car_model_id' => rand(494, 518),
                'fuel_id' => rand(1, 6),
                'gears_id' => rand(1, 4),
                'year' => rand(1990, 2015),
                'price' => rand(1000, 10000),
                'mileage' => rand(50000, 300000),
                'power' => rand(50, 250),
                'condition_id' => rand(1, 3),
                'body_id' => rand(1, 7),
                'region_id' => rand(1, 28),
                'user_id' => rand(1, 10),
                'color_id' => rand(1, 14),
                'door_id' => rand(1, 3)
            ));
        }
    }
}