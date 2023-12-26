<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(mt_rand(1, 3)),
            'description' => fake()->paragraph(mt_rand(5, 10)),
            'location' => fake()->country(),
            'date' => fake()->date(),
            'time' => fake()->time()
        ];
    }
}
