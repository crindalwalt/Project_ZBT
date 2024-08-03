<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            "course_id" => $this->faker->numberBetween(1,6),
            "expire_date" => $this->faker->date(),
            "payment_status" => "success",
            "enrollment_status" => "pending"
        ];
    }
}
