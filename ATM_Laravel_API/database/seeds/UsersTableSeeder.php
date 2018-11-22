<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();
        $password = Hash::make('1234');

        for($i = 0; $i < 3; $i++){
            User::create([
                'account_number' => $faker->randomNumber(8) ,
                'user_id' => $faker->randomNumber(8),
                'first_name' => $faker->firstName($gender = null),
                'last_name' => $faker->lastName,
                'password' => $password,
                // 'password' => $faker->numberBetween($min = 1000, $max = 9999),
                'balance' => $faker->randomFloat($nbDecimals = 2, $min= 0, $max= 1000),
                // 'api_token' => str_random(60)
            ]);
        }   
    }
}