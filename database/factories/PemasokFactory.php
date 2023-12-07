<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemasok>
 */
class PemasokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NamaPemasok' => fake()->name(),
            'Alamat' => fake()->address(),
            'NomorTelepon' => fake()->phonenumber(),
            'Email' => fake()->unique()->safeEmail(),
        ];
    }
}