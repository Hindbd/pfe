<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pubs>
 */
class pubsFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * 
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->id()->unique(),
            'nom' => fake()->text(),
            'titre' => fake()->text(),
            'contenu' => fake()->text(),
            'date' => fake()->date(),
        ];
    }
}
