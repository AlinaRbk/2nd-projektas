<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'description' => $this->faker->description(),
            'place' => $this->faker->place(),
            'phone' => $this->faker->number()

        ];
    }
}
