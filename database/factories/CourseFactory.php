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
    public function definition()
    {
        return [
            'categories_id' => rand(1,200),
            'teachers_id'=> rand(1,200),
            'levels_id'=> rand(1,10),
            'title'=>$this->faker->text(30),
            'image'=> $this->faker->imageUrl(),
            'price'=>$this->faker->randomDigit(),
            'key_activated'=>$this->faker->linuxPlatformToken(),
            'description_short'=>$this->faker->text(100),
            'description_long'=>$this->faker->text(400),
        ];
    }
}
