<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rdv>
 */
class RdvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'date_rdv' =>$this->faker->dateTime(),
           'heure_debut' =>$this->faker->time(),
           'heure_fin' =>$this->faker->time(),
        ];
    }
}
