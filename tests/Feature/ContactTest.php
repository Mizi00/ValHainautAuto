<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_contact_form_submission()
    {
        // Créez des données de formulaire simulées
        $formData = [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'mail' => $this->faker->safeEmail,
            'numero' => $this->faker->numerify('##########'), // Générez un numéro de téléphone à 10 chiffres
            'message' => $this->faker->sentence,
        ];

        // Soumettez le formulaire
        $response = $this->post(route('contact'), $formData);

        // Vérifiez que l'utilisateur est redirigé après la soumission du formulaire
        $response->assertRedirect(route('contact'));

        // Vérifiez que les données sont enregistrées dans la base de données
        $this->assertDatabaseHas('contacts', $formData);

        // Vérifiez que le message de succès est affiché dans la session
        $response->assertSessionHas('success', 'Merci pour votre message !');
    }

    public function test_contact_form_validation()
    {
        // Simuler les données de formulaire manquantes ou invalides
        $invalidFormData = [
            // Ne pas inclure de nom
            'prenom' => $this->faker->firstName,
            'mail' => 'invalidemail', // Adresse e-mail invalide
            'numero' => '123', // Numéro de téléphone trop court
            'message' => '', // Message vide
        ];

        // Soumettez le formulaire avec des données invalides
        $response = $this->post(route('contact'), $invalidFormData);

        // Vérifiez que les erreurs de validation sont affichées dans la session
        $response->assertSessionHasErrors(['nom', 'mail', 'numero', 'message']);
    }
}

