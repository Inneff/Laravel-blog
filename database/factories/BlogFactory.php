<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->name(),
            "slug" => $this->faker->text(20),
            "description" => $this->faker->text(),
            "preview" => $this->faker->text(50),
            "full_text" => $this->faker->text(),
            "created_at" => $this->faker->date(),
            "updated_at" => $this->faker->date(),
            "thumbnail" => $this->faker->image("public/storage/blogs", width: 640, height: 520, fullPath: false),

        ];
    }
}
