<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Annonce;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnnonceTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_add_annonce()
    {

        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->patch(route('annonce.validateAdd'), [
            'titre' => 'Test Annonce',
            'prix' => 10000,
            'modele' => 'Test Modèle',
            'annee' => 2022,
            'kilometrage' => 50000,
            'cv' => 5,
            'ch' => 120,
            'typeFuel' => 'Essence',
            'url' => 'https://example.com',
            'vitesse' => 'Manuelle'
        ]);

        $response->assertRedirect(route('annonce.index'));

        $this->assertDatabaseHas('annonces', [
            'titre' => 'Test Annonce',
        ]);
    }

    public function test_user_can_update_annonce()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        // Créez une annonce pour le test
        $annonce = Annonce::factory()->create(['idUser' => $user->id]);

        $newTitre = 'Nouveau Titre';
        $newPrix = 15000;

        // Simuler la mise à jour de l'annonce
        $response = $this->patch(route('annonce.update', $annonce->id), [

            'modele' => $annonce->modele,
            'annee' => $annonce->annee,
            'kilometrage' => $annonce->kilometrage,
            'cv' => $annonce->cv,
            'ch' => $annonce->ch,
            'typeFuel' => $annonce->typeFuel,
            'url' => $annonce->url,
            'titre' => $newTitre,
            'prix' => $newPrix,
            // Ajoutez d'autres champs à mettre à jour ici
        ]);

        $response->assertRedirect(route('annonce.index'));

        // Assurez-vous que les modifications ont été enregistrées dans la base de données
        $this->assertDatabaseHas('annonces', [
            'id' => $annonce->id,
            'titre' => $newTitre,
            'prix' => $newPrix,
            // Ajoutez d'autres assertions pour les autres champs mis à jour
        ]);
    }
}
