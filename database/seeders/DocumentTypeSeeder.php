<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\DocumentType::factory(10)->create();
    }
}
