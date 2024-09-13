<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarketingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Marketing::factory(10)->create();
    }
}
