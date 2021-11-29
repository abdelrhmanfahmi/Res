<?php

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        Transaction::create([
            'user_id' => 2,
            'wallet_id' => 1,
            'holder_name' => $faker->name,
            'type' => 1,
            'status' => 1,
            'amount' => 100,
            'payment_type' => 1,
            'credit_type' => 1,
            'credit_number' => $faker->creditCardNumber(),
            'expiry_date' => 1224,
        ]);
    }
}
