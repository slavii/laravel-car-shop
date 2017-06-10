<?php

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__ . '/../data/colors.csv', 'r');

        $lines = [];
        while (($line = fgetcsv($fp)) !== FALSE) {
            $lines[] = [
                'name' => $line[0]
            ];
        }

        Color::insert($lines);
        fclose($fp);
    }
}
