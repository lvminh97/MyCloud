<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("filetypes")->insert([
            ['id' => 1, 'name' => "text", 'function' => "viewText"],
            ['id' => 2, 'name' => "image", 'function' => "viewImage"],
            ['id' => 3, 'name' => "PDF", 'function' => "viewPDF"]
        ]);
    }
}
