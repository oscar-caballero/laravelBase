<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create first user
         // Inserta valores iniciales
         User::create([
            'id' => 1,
            'name' => 'sensei',
            'email' => 'sensei@reclutier.com',
            'password' => '$2y$10$wxS/Nr5p8B./LXTlXbot.u7CVXIT4JA4EKW/unxfg2Lk7e1h/fb8a',
        ]);
    }
}
