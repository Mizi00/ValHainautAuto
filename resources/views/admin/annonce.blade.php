@extends('layouts.app')

@section('body')

<x-admin.sidebar />

<div class="main-annonce">
    <div class="header-admin">
        <h1>Les Annonces</h1>
        <p>Ici, retrouvez la liste de toutes les annonces de voitures</p>
        <p>Créer, Modifier ou Supprimer une annonce</p>
    </div>
    <div class="body-annonce">
        <div class="head-body-annonce">
            <h1>Liste des annonces</h1>
            <a href="{{ route('annonce.add') }}">Ajouter une annonce</a>
        </div>

        <div class="table-div">
            @livewire('annonce')
        </div>
    </div>
</div>
@if(session('success') || session('delete'))
@section('js')
<script>
    butterup.toast({
        title: ' {{ session('success') ? '✅ Val Hainaut Auto ✅ ' : '🚨 Val Hainaut Auto 🚨' }}',
        message: '{{ session('success') ? session('success') : session('delete') }}',
        location: 'top-right',
        icon: false,
        dismissable: true,
        type: '{{ session('success') ? 'success' : 'error' }}'
    });
</script>
@endsection
@endif

@endsection