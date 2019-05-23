<?php

use Illuminate\Database\Seeder;

class roomImgSeeder extends Seeder
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
                'image' => $image,
                'image2' => $image,
                'image3' => $image,
                'room_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
