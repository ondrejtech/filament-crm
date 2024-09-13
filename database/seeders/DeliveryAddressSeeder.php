<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliveryAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\DeliveryAddress::factory(10)->create();
    }
}
