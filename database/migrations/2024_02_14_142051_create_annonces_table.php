<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titre', 255);
            $table->double('prix', 6, 2);
            $table->string('modele', 50);
            $table->string('annee', 20);
            $table->string('kilometrage', 20);
            $table->string('chevaux', 20);
            $table->string('typeFuel', 50);
            $table->string('url', 100);
            $table->string('description', 300);

            //clé étrangère 
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
