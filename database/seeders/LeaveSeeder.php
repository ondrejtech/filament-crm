<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Leave::factory(10)->create();
    }
}
