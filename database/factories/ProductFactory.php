<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_category_id' => $this->faker->numberBetween(1, 3),
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
