<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "license_plate" => strtoupper(fake()->lexify('???')) . strval(fake()->randomNumber(3, true)),
            "brand" => fake()->randomElement([
                "volkswagen",
                "subaru",
                "fiat",
                "suzuki",
                "tesla"

            ]),
            "type" => fake()->randomElement([
                "hatchback",
                "crossover",
                "convertible",
                "sedan",
                "sports-car",
                "coupe",
                "minivan",
            ]),
            "year" => fake()->date("Y-M-D"),
            "image" => "",
        ];
    }
}
