<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;

class AuthTest extends TestCase
{
    use DatabaseTransactions; // Permet de rollback après avoir fait les tests (donc n'affecte pas la bdd actuelle)

    public function test_user_can_authenticate_with_valid_credentials()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'), // Assurez-vous que vous avez utilisé bcrypt pour le hashage du mot de passe
        ]);

        $response = $this->post(route('login'), [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('homeAdmin'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_authenticate_with_invalid_credentials()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post(route('login'), [
            'email' => 'test@example.com',
            'password' => 'wrong_password', // Mot de passe incorrect
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest(); // Vérifie que l'utilisateur n'est pas authentifié
    }
}

