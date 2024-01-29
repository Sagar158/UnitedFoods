<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImages>
 */
class ProductImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomProduct = Products::inRandomOrder()->first();
        return [
            'product_id' => $randomProduct->id,
            'image' => $this->faker->imageUrl(),
            'primary' => $this->faker->randomElement([0, 1]),
        ];
    }
}
