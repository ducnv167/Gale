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
         $this->call(UserSeeder::class);
=======
        // $this->call(UserSeeder::class);
        $this->call(HouseSeeder::class);
>>>>>>> f00ae5a947e44393c26cbdce0ef7b582a98324dc
    }
}
