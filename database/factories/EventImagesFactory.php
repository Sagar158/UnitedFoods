<?php

namespace Database\Factories;

use App\Models\EventImages;
use App\Models\Events;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventImages>
 */
class EventImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomEvent = Events::inRandomOrder()->first();
        return [
            'event_id' => $randomEvent->id,
            'image' => $this->faker->imageUrl(),
            'primary' => $this->faker->randomElement([0, 1]),
        ];
    }
}
