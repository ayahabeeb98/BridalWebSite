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
        App\Category::create(
            array('name' => 'Gaza',
                'location' => 'gaza_governorate')

        );

        App\Category::create(
            array('name' => 'North',
                'location' => 'north_governorate')

        );

        App\Category::create(
            array('name' => 'South',
                'location' => 'south_governorate')

        );

        App\Category::create(
            array('name' => 'Central',
                'location' => 'central_governorate')

        );

    }
}
