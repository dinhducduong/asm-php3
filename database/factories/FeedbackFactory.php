<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_id' => rand(1,200),
            'name'=> $this->faker->name(),
            'email'=>$this->faker->email(),
            'content'=> $this->faker->text(300),
            'status'=> rand(0,1),
        ];
    }
}
