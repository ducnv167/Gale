<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
//         $this->call(UserSeeder::class);
//        $this->call(HouseSeeder::class);
=======
        $this->call(UserSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(HouseSeeder::class);
>>>>>>> 8c4ed97c6e87fe2810a461b891eeda055e52899d
    }
}