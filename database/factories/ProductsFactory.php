<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 3),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'rate' => $this->faker->randomFloat(2, 0, 100), // Assuming rate is a decimal
            'unit' => 'kg',
            'discount' => $this->faker->numberBetween(1, 100),
            'discount_unit' => $this->faker->randomElement(['percentage', 'fixed']),
        ];
    }
}
