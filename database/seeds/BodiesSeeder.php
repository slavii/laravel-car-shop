<?php

use App\Models\Body;
use Illuminate\Database\Seeder;

class BodiesSeeder extends Seeder
{
    public function run()
    {
        $fp = fopen(__DIR__ . '/../data/bodies.csv', 'r');
        while (($line = fgetcsv($fp)) !== FALSE) {
            $body = new Body();
            $body->create(array(
                'name' => $line[0]
            ));
        }
        fclose($fp);
    }
}
