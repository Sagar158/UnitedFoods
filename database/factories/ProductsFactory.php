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
            'color' => $this->faker->optional()->safeColorName,
            'texture' => $this->faker->optional()->word,
            'taste' => $this->faker->optional()->word,
            'appearance' => $this->faker->optional()->word,
            'size' => $this->faker->optional()->randomElement(['small', 'medium', 'large']),
            'shape' => $this->faker->optional()->word,
        ];
    }
}
