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
        $this->call(userSeeder::class);
        $this->call(categoriesSeeder::class);
        $this->call(bookingSeeder::class);
        $this->call(hallsSeeder::class);
        $this->call(roomImgSeeder::class);
        $this->call(roomsSeeder::class);




    }
}
