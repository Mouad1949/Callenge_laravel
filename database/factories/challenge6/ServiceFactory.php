<?php

namespace Database\Factories\challenge6;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\challenge6\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=>fake()->title(),
            "description"=>fake()->text(),
            "duration"=>fake()->randomDigit(),
            "price"=>fake()->numberBetween($min = 200 ,$max = 500),
            "image"=>fake()->imageUrl()
        ];
    }
}
