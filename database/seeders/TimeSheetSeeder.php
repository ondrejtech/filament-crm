<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TimeSheet::factory(10)->create();
    }
}
