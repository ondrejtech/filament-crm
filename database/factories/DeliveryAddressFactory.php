<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryAddress>
 */
class DeliveryAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'delivery_address' => fake()->text(50),
            'delivery_town' => fake()->text(50),
            'delivery_zip' => fake()->text(50),
            'delivery_state' => fake()->text(50),
            'delivery_country' => fake()->text(50),

        ];
    }
}
