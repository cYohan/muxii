<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'user_id' => $this->faker->randomElement([1, 2, 3]),
            'body' => $this->faker->sentence()
        ];
    }
}