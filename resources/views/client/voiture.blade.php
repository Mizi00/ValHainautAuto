@extends('layouts.app')

@section('body')

<x-navbar />

<div class="card-container">
    <div class="title-voiture">
        <h1>Nos Véhicules</h1>
        <h4>Liste des véhicules à vendre</h4>
    </div>

    <ul class="cards">
        @foreach($annonces as $annonce)
        <li class="cards-item">
            <div class="card">
                <div class="card-image"><img src="logo-val.png" alt=""></div>
                <div class="card-content">
                    <div>
                        <h2 class="card-title">{{ $annonce->titre }}</h2>
                        <ul class="card-list">
                            <li>Modèle: {{ $annonce->modele }}</li>
                            <li>Année: {{ $annonce->annee }}</li>
                            <li>Cv: {{ $annonce->chevaux }}</li>
                            <li>Carburant: {{ $annonce->typeFuel }}</li>
                            <li>Montant: {{ $annonce->prix }} €</li>
                        </ul>
                        <p class="card-text">{{ Str::limit($annonce->description, 50) }}</p>
                    </div>

                    <a href="{{ $annonce->url }}" target="_blank"><button class="card-button">Voir Plus</button></a>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

</div>


<x-footer />