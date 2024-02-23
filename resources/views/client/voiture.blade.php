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
                            <li>Kilométrage: <strong>{{ $annonce->kilometrage }} Km</strong></li>
                            <li>{{ $annonce->cv }} Cv</li   >
                            <li>{{ $annonce->ch }} Ch</li>
                            <li>Type boîte: {{ $annonce->vitesse }}</li>
                            <li>Carburant: {{ $annonce->typeFuel }}</li>
                            <li>Montant: {{ $annonce->prix }} €</li>
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