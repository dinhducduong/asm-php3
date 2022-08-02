<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'categories_id' => rand(1, 20),
            'users_id' => rand(1, 20),
            'levels_id' => rand(1, 20),
            'title' => $this->faker->text(30),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomDigit(),
            'key_activated' => Str::random(20),
            'description_short' => $this->faker->text(100),
            'description_long' => $this->faker->text(400),
        ];
    }
}