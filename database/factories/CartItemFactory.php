<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cart_id' => 1,
            'product_id' => $this->faker->numberBetween(1,5),
            'quantity' => $this->faker->numberBetween(1,5),
            'individual_price' => $this->faker->numberBetween(30,1000),
        ];
    }
}
