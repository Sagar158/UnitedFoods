<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'from' => $this->faker->numberBetween(01, 12).'/'.$this->faker->numberBetween(01, 15).'/2024',
            'to' => $this->faker->numberBetween(01, 12).'/'.$this->faker->numberBetween(15, 30).'/2024',
            'description' => implode("\n\n", $this->faker->paragraphs(mt_rand(5, 10))),
        ];
    }
}
