<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'document_type' => $this->faker->randomElement(['CC', 'TI', 'CE']),
            'document_number' => $this->faker->randomElement([1234567890, 0987654321]),
            'expedition_date' => $this->faker->date('Y-m-d'),
            'exped_muni' => $this->faker->city(),
            'names' => $this->faker->name(),
            'last_name1' => $this->faker->lastName(),
            'last_name2' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['M', 'F', 'OTROS']),
            'birth_date' => $this->faker->date('Y-m-d'),
            'birth_muni' => $this->faker->city(),
            'stratum' => $this->faker->randomElement([1,2,3,4,5,6]),
            'course' => $this->faker->randomElement(['Dibujo Nivel 1', 'Dibujo Nivel 2', 'Dibujo Nivel 3']),
        ];
    }
}
