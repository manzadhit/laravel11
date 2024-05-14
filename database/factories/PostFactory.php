<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        $title = $this->faker->sentence(3);
        $slug = Str::slug($title);

        // Ensure the slug is unique
        while (Post::where('slug', $slug)->exists()) {
            $slug = Str::slug($title) . '-' . Str::random(6);
        }

        return [
            'title' => $title,
            'slug' => $slug,
            "excerpt" => fake()->paragraph(),
            "body" => fake()->paragraphs(5, true),
            "category_id" => mt_rand(1,2),
            "user_id" => mt_rand(1,5),
        ];
    }
}
