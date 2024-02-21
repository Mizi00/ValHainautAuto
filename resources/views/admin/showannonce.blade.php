@extends('layouts.app')

@section('body')
<x-admin.sidebar />
<div class="main-show-annonce">
    <div class="inner-show-annonce">
        <div class="inner-title">
            <h1>Annonce n° {{ $annonce->id }} ➜ {{ $annonce->titre }}</h1>
        </div>
        <div class="inner-show-annonce-text">
            <p><strong>Id Annonce:</strong> {{ $annonce->id }}</p>
            <p><strong>Nom Véhicule:</strong> {{ $annonce->titre }}</p>
            <p><strong>Prix Véhicule:</strong> {{ $annonce->prix }}</p>
            <p><strong>Modèle Véhicule:</strong> {{ $annonce->modele }}</p>
            <p><strong>Année Véhicule:</strong> {{ $annonce->annee }}</p>
            <p><strong>C.V Véhicule:</strong> {{ $annonce->chevaux }}</p>
            <p><strong>Type Carburant Véhicule:</strong> {{ $annonce->typeFuel }}</p>
            <p><strong>URL Véhicule:</strong> <a href="{{ $annonce->url  }}">{{ $annonce->url }}</a> </p>
            <div class="div-button-show-annonce">
                <a class="button-show-annonce" href="{{ route('annonce.edit', $annonce->id) }}">Éditer le véhicule</a>
            </div>

        </div>
    </div>
</div>
@endsection