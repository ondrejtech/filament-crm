<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(50),
            'email' => fake()->text(50),
            'phone' => fake()->text(50),
            'street' => fake()->text(50),
            'town' => fake()->text(50),
            'zip' => fake()->text(50),
            'state' => fake()->text(50),
            'country' => fake()->text(50),
            'est_revenue' => fake()->text(50),
            'referral_source' => fake()->text(50),

        ];
    }
}
