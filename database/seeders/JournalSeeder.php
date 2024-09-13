<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Journal::factory(10)->create();
    }
}
