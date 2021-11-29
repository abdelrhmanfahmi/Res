<?php

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{


    public function run()
    {
        $faker = \Faker\Factory::create();

        Property::create([
            'property_number' => $faker->numberBetween(1, 1500),
            'property_name' => $faker->name,
            'room_type' => 1,
            'property_type' => 1,
            'share_price' => $faker->numberBetween(1, 1500),
            'share_limit' => 3,
            'dimensions' => '40 m * 30 m',
            'benefits' => $faker->sentence(),
            'monthly_rent' => $faker->numberBetween(1, 1500),
            'yearly_rent' => $faker->numberBetween(1, 3000),
            'market_study' => $faker->sentence(),
            'description' => $faker->sentence(),
            'street_name' => $faker->name,
            'street_NO' => $faker->numberBetween(1, 100),
            'num_of_rooms' => $faker->numberBetween(1, 100),
            'postcode' => $faker->numberBetween(1, 100),
            'status' => 1,
            'cost' => $faker->numberBetween(1, 100),
            'location' => $faker->name,
            'published_date' => $faker->date(),
        ]);
    }
}
