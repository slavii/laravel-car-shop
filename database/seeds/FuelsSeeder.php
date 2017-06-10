<?php

use App\Models\Fuel;
use Illuminate\Database\Seeder;

class FuelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__ . '/../data/fuels.csv', 'r');

        $lines = [];
        while (($line = fgetcsv($fp)) !== FALSE) {
            $lines[] = [
                'name' => $line[0]
            ];
        }

        Fuel::insert($lines);
        fclose($fp);
    }
}
