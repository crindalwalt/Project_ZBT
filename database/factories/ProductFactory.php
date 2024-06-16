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
    public function definition(): array
    {
        $statusValues = ["active", "inactive"];
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'regular_price' => $this->faker->numberBetween(10, 200),
            'discount_price' => $this->faker->numberBetween(8, 100),
            'quantity' => $this->faker->numberBetween(10, 60),
            'status' => $this->faker->randomElement($statusValues),
            'category_id'  => $this->faker->numberBetween(1,5),

        ];
    }
}
