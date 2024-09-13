<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JournalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\JournalType::factory(10)->create();
    }
}
