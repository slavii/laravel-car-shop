<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(BodiesSeeder::class);
//        $this->call(CarMakesSeeder::class);
//        $this->call(CarModelsSeeder::class);;
//        $this->call(ColorsSeeder::class);;
//        $this->call(ConditionsSeeder::class);;
//        $this->call(FuelsSeeder::class);;
//        $this->call(GearsSeeder::class);;
//        $this->call(RegionsSeeder::class);
//        $this->call(EquipmentsSeeder::class);
//        $this->call(DoorsSeeder::class);
//        $this->call(ImagesSeeder::class);
//        $this->call(UsersSeeder::class);
        $this->call(CarsSeeder::class);
    }
}
