<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'placeTitle'=> fake()->name(),
            'placeImage'=> fake()->imageUrl(800, 600),
            'placeMinPrice' => fake()->numberBetween($min = 10, $max = 100),
            'placeMaxPrice' => fake()->numberBetween($min = 10, $max = 100),
            'placeDescription' => fake()->text(),
        ];
    }
}
