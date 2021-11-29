<?php

use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{


    public function run()
    {
        Wallet::create([
            'user_id' => 1,
            'balance' => 1,
            'addon_balance' => 1,
            'status' => 1,
        ]);
    }
}
