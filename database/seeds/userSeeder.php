<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(0,10)as $index){
            $image = $faker->image(public_path('image'));
            $image = str_replace(public_path(), '', $image);
            App\User::create(
                [
                    "name"=>$faker->name,
                    "password"=>$faker->password,
                    'username'=>$faker->userName,
                    "phone"=>2,
                    "bank_account"=>$faker->isbn10,
                    "image"=>$image,

                ]
            );
        }
    }
}
