<?php

use App\Models\Gear;
use Illuminate\Database\Seeder;

class GearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__ . '/../data/gears.csv', 'r');

        $lines = [];
        while (($line = fgetcsv($fp)) !== FALSE) {
            $lines[] = [
                'name' => $line[0]
            ];
        }

        Gear::insert($lines);
        fclose($fp);
    }
}
