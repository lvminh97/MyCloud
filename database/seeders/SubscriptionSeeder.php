<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("subscriptions")->insert([
            ['id' => 1, 'name' => "Admin", 'capacity' => 0],
            ['id' => 2, 'name' => "Starter", 'capacity' => 2],
            ['id' => 3, 'name' => "Advanced", 'capacity' => 10]
        ]);
    }
}
