<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->create(array(
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'first_name' => str_random(8),
                'last_name' => str_random(8)
            ));
        }
    }
}
