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
        $automobiles = ["Toyota", "Honda", "Ford", "Chevrolet", "Volkswagen", "Nissan", "BMW", "Mercedes-Benz", "Audi", "Hyundai", "Kia",
            "Mazda", "Subaru", "Tesla", "Fiat"];
        $marquesVoitures = ['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW', 'Mercedes-Benz', 'Audi', 'Volkswagen', 'Tesla', 'Nissan'];
        $typesCarburant = ['Essence', 'Diesel', 'GPL (Gaz de Pétrole Liquéfié)', 'GNV (Gaz Naturel Véhicule)', 'Éléctrique'];
        $vitesse  = ['Automatique', 'Manuelle'];
        $urlImg = ['img/voiture1.jpg', 'img/voiture2.jpg', 'img/voiture3.jpg'];

        return [
            'titre' => fake()->randomElement($automobiles),
            'prix' => fake()->randomFloat(2, 1, 10000),
            'vitesse' => fake()->randomElement($vitesse),
            'idUser' => 1,
            'modele' => fake()->randomElement($marquesVoitures),
            'annee' => fake()->numberBetween(1990, 2024),
            'cv' => fake()->randomNumber(1, 500),
            'ch'=> fake()->numberBetween(50, 1000),
            'typeFuel' => fake()->randomElement($typesCarburant),
            'url' => fake()->imageUrl(),
            'img' => fake()->randomElement($urlImg),
            'kilometrage' => fake()->randomNumber(1, 1000000)
        ];
    }
}
