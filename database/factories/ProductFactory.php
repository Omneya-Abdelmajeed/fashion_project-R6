<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => basename(fake()->image(public_path('assets/images/product'))),
            'title' => fake()->randomElement(['Tree pots', 'Fashion set', 'Fresh Juice', 'Water bottles', 'Natural cosmetics', 'Accessories']),
            'price' => fake()->randomFloat(2, 20, 100), //setting min. value 20, and Max. value 100
            'shortDescription' => fake()->text(250), //lengh of text is 250 character
        ];
    }
}

