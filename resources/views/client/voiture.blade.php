@extends('layouts.app')

@section('body')

<x-navbar />

<div class="card-container">
    <div class="title-voiture">
        <h1>Nos Véhicules</h1>
        <h4>Liste des véhicules à vendre</h4>
    </div>

    @livewire('search-annonce')

</div>
<x-scrollup />
<x-footer fixed="{{ $annonces->isEmpty() ? 'true' : 'false' }}" />

@endsection