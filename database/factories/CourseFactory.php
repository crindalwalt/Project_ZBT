<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = ['paid', 'free'];
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'category_id' => $this->faker->numberBetween(1, 6),
            'description' => $this->faker->paragraph,
            'video' => "https://youtu.be/044GiRqGebc?si=TmqYt2FAmQjEPL-c",
            'image' => $this->faker->imageUrl,
            'start_date' => $this->faker->date,
            'language' => $this->faker->languageCode,
            'duration' => $this->faker->numberBetween(10, 60),
            'type' => $this->faker->randomElement($type),
            'regular_price' => $this->faker->numberBetween(10, 100),
            'discount_price' => $this->faker->numberBetween(10, 100),
        ];
    }
}
