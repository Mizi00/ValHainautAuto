<?php

namespace Database\Seeders;

use App\Models\Annonce;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Annonce::factory()->count(10)->create();
    }
}
