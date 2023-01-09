<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SubscriptionSeeder::class);
        $this->call(FileTypeSeeder::class);
        $this->call(PrivilegeSeeder::class);
        $this->call(UserSeeder::class);
    }
}
