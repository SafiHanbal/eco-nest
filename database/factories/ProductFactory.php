<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            "name" => fake()->sentence(rand(1, 5)),
            "price" => fake()->randomFloat(2, 100, 500),
            "description" => fake()->paragraphs(3, true),
            "summary" => fake()->paragraph,
        ];
    }
}
