<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("privileges")->insert([
            ['id' => 1, 'name' => "admin", 'read' => 1, 'write' => 1],
            ['id' => 2, 'name' => "edit", 'read' => 1, 'write' => 1],
            ['id' => 3, 'name' => "readonly", 'read' => 1, 'write' => 0]
        ]);
    }
}
