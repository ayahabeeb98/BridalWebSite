<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                    "password"=>\Illuminate\Support\Facades\Hash::make("123456789"),
                    'username'=>$faker->userName,
                    'email' => $faker->email,
                    "phone"=>$faker->phoneNumber,
                    "bank_account"=>$faker->isbn10,
                    "image"=>$image,
                    'type' => $faker->randomElement(['manager','customer']),

                ]
            );
        }
    }
}
