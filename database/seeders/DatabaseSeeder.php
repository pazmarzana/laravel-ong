<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DonationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            DonationSeeder::class,
            PostSeeder::class,
            SubscriberSeeder::class,
            VolunteerSeeder::class,
        ]);
    }
}
