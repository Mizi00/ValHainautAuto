@extends('layouts.app')

@section('vehicule')
    <meta name="description" content="Retrouvez nos véhicules en vente en temps réel chez Val Hainaut Auto">
@endsection

@section('body')

<x-navbar />
<x-sidebar />

<div class="card-container">
    <div class="title-voiture">
        <h1>Nos Véhicules</h1>
        <h4>Liste des véhicules à vendre</h4>
    </div>

    @livewire('search-annonce')

</div>
<x-scrollup />
<x-footer />

@endsection