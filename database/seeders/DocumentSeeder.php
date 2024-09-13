<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Document::factory(10)->create();
    }
}
