<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $marquesVoitures = ['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW', 'Mercedes-Benz', 'Audi', 'Volkswagen', 'Tesla', 'Nissan'];
        $typesCarburant = ['Essence', 'Diesel', 'GPL (Gaz de Pétrole Liquéfié)', 'GNV (Gaz Naturel Véhicule)', 'Éléctrique'];

        return [
            'titre' => fake()->sentence(),
            'prix' => fake()->randomFloat(2, 1, 10000),
            'description' => fake()->text(50),
            'idUser' => 1,
            'modele' => fake()->randomElement($marquesVoitures),
            'annee' => fake()->numberBetween(1990, 2024),
            'chevaux' => fake()->randomNumber(1, 500),
            'typeFuel' => fake()->randomElement($typesCarburant),
            'url' => fake()->imageUrl()
        ];
    }
}
