<?php

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $image = new Image();
            $image->create(array(
                'name' => str_random(10)
            ));
        }
    }
}
