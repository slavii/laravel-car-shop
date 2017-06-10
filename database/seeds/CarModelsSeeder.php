<?php

use App\Models\CarModel;
use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__ . '/../data/car_models.csv', 'r');

        $lines = [];
        while (($line = fgetcsv($fp)) !== FALSE) {
            $lines[] = [
                'name' => $line[0],
                'car_make_id' => $line[1]
            ];
        }

        CarModel::insert($lines);
        fclose($fp);
    }
}