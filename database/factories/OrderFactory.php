<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ["pending", "approved", "cancelled"];
        return [
            "user_id" => $this->faker->numberBetween(1, 10),
            "user_address_id" => $this->faker->numberBetween(1, 10),
            "total_value" => $this->faker->numberBetween(100,5000),
            "delivery_status" => $this->faker->randomElement($status),
            "payment_status" => $this->faker->randomElement($status),
        ];
    }
}
