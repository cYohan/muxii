<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
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
            'format_id' => $this->faker->randomElement([1, 2, 3]),
            'title' => $this->faker->sentence(),
            'rute' => $this->faker->randomElement(['pexels-andrew-neel-11082557.jpg', 'pexels-juan-nino-9556543.jpg', 'pexels-kammeran-gonzalezkeola-9638686.jpg', 'pexels-nikita-igonkin-10836902.jpg']),
            'body' => $this->faker->paragraph()
        ];
    }
}