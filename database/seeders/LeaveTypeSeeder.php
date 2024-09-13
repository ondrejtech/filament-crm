<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\LeaveType::factory(10)->create();
    }
}
