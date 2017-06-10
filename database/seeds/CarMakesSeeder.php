<?php

use App\Models\CarMake;
use Illuminate\Database\Seeder;

class CarMakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__ . '/../data/car_makes.csv', 'r');

        $lines = [];
        while (($line = fgetcsv($fp)) !== FALSE) {
            $lines[] = [
                'name' => $line[0]
            ];
        }

        CarMake::insert($lines);
        fclose($fp);
    }
}
