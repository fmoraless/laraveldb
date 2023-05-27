<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(4);
        $slug = Str::slug($title, '-');
        return [
            'user_id' => fake()->randomDigit(),
            'title' => $title,
            'slug' => $slug,
            'excerpt' => fake()->sentence(10),
            'description' => fake()->paragraph(5),
            'is_published' => fake()->boolean(),
            'min_to_read' => fake()->numberBetween(1, 10),
        ];
    }
}
