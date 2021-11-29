<?php

use App\Models\SavedCredit;
use Illuminate\Database\Seeder;

class SavedCreditSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();

        SavedCredit::create([
            'user_id' => 2,
            'holder_name' => $faker->name,
            'credit_type' => 1,
            'credit_number' => $faker->numberBetween(1, 465421),
            'expiry_date' => 1222,
        ]);

    }
}
