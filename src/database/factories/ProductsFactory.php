<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'stock' => $this->faker->randomNumber(2),
            'status' => $this->faker->randomElement(['available', 'unavailable']),
            'sku' => $this->faker->unique()->slug,
        ];
    }
}
