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
            //
            'name' => fake() ->name(),
            'productid' => fake() ->unique() -> numberBetween(0, 10),
            'image' => fake() ->imageUrl(),
            'oldprice' => fake() ->numberBetween(1000000, 3000000),
            'newprice' => fake() ->numberBetween(500000, 1000000),
            'description' => fake() -> paragraph(),
        ];
    }
}
