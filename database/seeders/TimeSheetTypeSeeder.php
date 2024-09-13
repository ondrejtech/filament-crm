<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeSheetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TimeSheetType::factory(10)->create();
    }
}
