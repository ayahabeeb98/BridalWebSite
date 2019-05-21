<?php

use Illuminate\Database\Seeder;

class roomsSeeder extends Seeder
{


    public function run()

    {
        $faker = Faker\Factory::create(); // factory pattern // hide creation operations
        foreach (range(0, 10) as $index) {
            $image = $faker->image(public_path('image'));
            $image = str_replace(public_path(), '', $image);
            \App\Room::create([
                'name' => $faker->name,
                'tables' => $faker->numberBetween(1,20),
                'chairs' => $faker->numberBetween(1,30),
                'price' => $faker->numberBetween(50,130),
                'earnest' => $faker->numberBetween(50,130),
                'no_people' => $faker->numberBetween(50,130),
                'hall_id' => $faker->numberBetween(1, 10),
            ]);
        }

    }
}
