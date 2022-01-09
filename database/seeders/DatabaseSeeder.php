<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Start with a empty database.
        Artisan::call('migrate:fresh');

        // Run the seeders.
        $this->call(UsersSeeder::class);
    }
}
