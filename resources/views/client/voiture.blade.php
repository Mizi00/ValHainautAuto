@extends('layouts.app')

@section('body')

<x-navbar />

<div class="card-container">
    <div class="title-voiture">
        <h1>Nos Véhicules</h1>
        <h4>Liste des véhicules à vendre</h4>
    </div>

    <ul class="cards">
        @forelse($annonces as $annonce)
        <li class="cards-item">
            <div class="card">
                <div class="card-image"><img src="{{ asset('storage/uploads/'.$annonce->img) }}" alt=""></div>
                <div class="card-content">
                    <div>
                        <h2 class="card-title">{{ $annonce->titre }}</h2>
                        <ul class="card-list">
                            <li><i class="fa-solid fa-list"></i> Modèle: {{ $annonce->modele }}</li>
                            <li><i class="fa-solid fa-calendar-days"></i> Année: {{ $annonce->annee }}</li>
                            <li><i class="fa-solid fa-gauge"></i> Kilométrage: <strong>{{ $annonce->kilometrage }} Km</strong></li>
                            <li><i class="fa-solid fa-scale-unbalanced-flip"></i> Puissance fiscal: {{ $annonce->cv }} Cv</li   >
                            <li><i class="fa-solid fa-car"></i> Puissance DIN: {{ $annonce->ch }} Ch</li>
                            <li><i class="fa-solid fa-gears"></i> Type boîte: {{ $annonce->vitesse }}</li>
                            <li><i class="fa-solid fa-gas-pump"></i> Carburant: {{ $annonce->typeFuel }}</li>
                            <li><i class="fa-solid fa-tags"></i> Montant: {{ $annonce->prix }} €</li>
                        </ul>
                        <p class="card-text">{{ Str::limit($annonce->description, 50) }}</p>
                    </div>

                    <a href="{{ $annonce->url }}" target="_blank"><button class="card-button">Voir Plus</button></a>
                </div>
            </div>
        </li>
        @empty
        <div class="empty-card">
                 <div><i class="fa-solid fa-question"></i></div>
            <p>Pas de véhicule pour l'instant ...</p>
        </div>

        @endforelse
    </ul>

</div>
<x-scrollup />
<x-footer fixed="{{ $annonces->isEmpty() ? 'true' : 'false' }}" />