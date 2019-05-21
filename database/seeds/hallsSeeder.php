<?php

use Illuminate\Database\Seeder;

class hallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); // factory pattern // hide creation operations
        foreach (range(0, 10) as $index) {
            $image = $faker->image(public_path('image'));
            $image = str_replace(public_path(), '', $image);
            \App\Hall::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'image' => $image,
                'rooms_num' => $faker->numberBetween(1, 10),
                'manager_id' => $faker->numberBetween(1, 10),
                'category_id' => $faker->numberBetween(1, 4),
            ]);
        }
    }
}
