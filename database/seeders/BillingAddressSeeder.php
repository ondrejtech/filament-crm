<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BillingAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\BillingAddress::factory(10)->create();
    }
}
