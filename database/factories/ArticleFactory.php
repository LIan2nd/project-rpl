<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 2),
            'title' => fake()->sentence(mt_rand(1, 3)),
            'slug' => fake()->slug(mt_rand(1, 3)),
            'body' => collect(fake()->paragraphs(mt_rand(6, 12)))->map(fn($p) => "<span>$p</span>")->implode('')
        ];
    }
}