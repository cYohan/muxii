<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement([1, 2, 3]),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'type_id' => $this->faker->randomElement([3, 5]),
        ];
    }
}