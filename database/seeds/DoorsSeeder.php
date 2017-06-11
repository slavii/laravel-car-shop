<?php

use App\Models\Door;
use Illuminate\Database\Seeder;

class DoorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fp = fopen(__DIR__ . '/../data/doors.csv', 'r');
        while (($line = fgetcsv($fp)) !== FALSE) {
            $body = new Door();
            $body->create(array(
                'name' => $line[0]
            ));
        }
        fclose($fp);
    }
}
