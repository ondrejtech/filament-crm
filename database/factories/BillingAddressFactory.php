<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BillingAddress>
 */
class BillingAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'billing_street' => fake()->text(50),
            'billing_town' => fake()->text(50),
            'billing_zip' => fake()->text(50),
            'billing_state' => fake()->text(50),
            'billing_country' => fake()->text(50),

        ];
    }
}
