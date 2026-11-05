<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nis' => fake()->randomNumber(5, true),
            'classroom' => fake()->randomElement(['X RPL 1', 'X RPL 2', 'X RPL 3', 'XI RPL 1', 'XI RPL 2', 'XI RPL 3', 'XII RPL 1', 'XII RPL 2', 'XII RPL 3']),
            'address' => fake()->address(),

        ];
    }
}
