<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email'=> $this->faker->email(),
            'phone'=>$this->faker->phoneNumber(10),
            'address'=> $this->faker->address(),
            'surplus'=>$this->faker->randomDigit(),
            'education'=>$this->faker->paragraph(),
            'description_short'=>$this->faker->text(100),
            'introduce'=>$this->faker->text(100),
        ];
    }
}
