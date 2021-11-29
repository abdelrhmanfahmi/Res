<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

       // test data
        $this->call([
            UserSeeder::class,
            WalletSeeder::class,
            PropertySeeder::class,
            SavedCreditSeeder::class,
            TransactionSeeder::class,
            NotificationSeeder::class,
            TicketSeeder::class,
        ]);


        \DB::table('property_requests')->insert([
            'user_id' => 1,
            'property_id' => 1,
            'status' => 1,
        ]);

        \DB::table('investments')->insert([
            'user_id' => 1,
            'property_id' => 1,
            'status' => 1,
        ]);


    }
}
