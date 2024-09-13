<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Curency::factory(10)->create();
    }
}
