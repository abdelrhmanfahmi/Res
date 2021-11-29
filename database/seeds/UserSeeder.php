<?php

use App\Models\Investor;
use App\Models\Owner;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        $owner = User::create([
            'email' => $faker->email,
            'password' => \Hash::make('12345678'),
            'role' => User::PROP_OWNER,
            'phone_number' => $faker->phoneNumber,

        ]);

        Owner::create([
            'user_id' => $owner->id,
            'full_name' => $faker->name,
            'serial_id' => $faker->numberBetween(1, 500),
            'dob' => $faker->date,
        ]);

        $investor = User::create([
            'email' => $faker->email,
            'password' => \Hash::make('12345678'),
            'role' => User::PROP_OWNER,
            'phone_number' => $faker->phoneNumber,
        ]);

        Investor::create([
            'user_id' => $investor->id,
            'full_name' => $faker->name,
            'serial_id' => $faker->numberBetween(1, 500),
            'dob' => $faker->date,
        ]);

    }
}
