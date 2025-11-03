<?php

namespace Database\Factories\challenge6;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\challenge6\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "date"=>fake()->date(),
            "time"=>fake()->time(),
            "status"=>fake()->randomElement(['witing','confirmd'])
        ];
    }
}
