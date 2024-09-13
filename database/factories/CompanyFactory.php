<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->text(50),
            'phone' => fake()->text(50),
            'email' => fake()->text(50),
            'website' => fake()->text(50),
            'ico' => fake()->text(50),
            'vat' => fake()->text(50),
            'street' => fake()->text(50),
            'town' => fake()->text(50),
            'zip' => fake()->text(50),
            'state' => fake()->text(50),
            'country' => fake()->text(50),
            'billing_street' => fake()->text(50),
            'billing_town' => fake()->text(50),
            'billing_zip' => fake()->text(50),
            'billing_state' => fake()->text(50),
            'billing_country' => fake()->text(50),

        ];
    }
}
