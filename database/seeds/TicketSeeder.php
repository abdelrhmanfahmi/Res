<?php

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{

    public function run()
    {
        Ticket::create([
            'user_id' => 2,
            'status' => 1,
            'review' => 5,
        ]);

    }
}
