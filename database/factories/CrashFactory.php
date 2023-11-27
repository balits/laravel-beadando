<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crash>
 */
class CrashFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "location" => fake()->city(),
            "time" => fake()->date("Y-M-D"),
            "description" => fake()->paragraph(),
        ];
    }
}
