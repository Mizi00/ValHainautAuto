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
            <a href="">Ajouter une annonce</a>
        </div>

        <div class="table-div">
            @livewire('annonce')
        </div>
    </div>
</div>

@section('js')
<script>
    butterup.toast({
        title: '🎉 Hooray!',
        message: 'Your payment was successful.',
        location: 'top-right',
        icon: false,
        dismissable: false,
        type: 'success',
    });
</script>
@endsection

@endsection