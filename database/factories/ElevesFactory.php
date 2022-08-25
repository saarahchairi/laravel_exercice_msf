<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleves>
 */
class ElevesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom"=> $this->faker->firstName,
            "prenom"=> $this->faker->lastName,
            "age"=> $this->faker->numberBetween($min = 18, $max = 30),
            "etat"=> $this->faker->jobTitle,
        ];
    }
}
