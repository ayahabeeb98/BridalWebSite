<?php

use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        foreach (range(0,4)as $index){
            $image = $faker->image(public_path('image'));
            $image = str_replace(public_path(), '', $image);
            App\Category::create(
                [
                    'location' => $faker->randomElement(['north_governorate','central_governorate','south_governorate','gaza_governorate']),

                ]
            );
        }

    }
}
