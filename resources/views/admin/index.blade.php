@extends('layouts.app')

@section('body')
<x-admin.sidebar />

<div class="main-home-admin">
    <div class="header-admin">
        <h1>Accueil</h1>
        <p>Ici vous êtes dans le tableau de bord du site Val Hainaut Auto</p>
    </div>
    <div class="main-home-body">
        <h1>Tutorial</h1>
        <p>Voici un petit tuto pour savoir comment Ajouter / éditer ou supprimer une Annonce d'un véhicule.</p>
        <div class="main-home-body-innner">
            <h4>Ajouter une annonce au site Val Hainaut Auto:</h4>
            <ul>
                <li>Aller dans l'onglet <strong>Annonce</strong> sur la barre de navigation latéral gauche.</li>
                <li>Puis appuyer sur le boutton <strong>Ajouter une annonce</strong>.</li>
                <li>Vous allez être regiriger vers un formulaire à remplir pour <strong>Ajouter</strong> une annonce.</li>
                <li>Une fois terminé appuyer sur le boutton <strong>Ajouter</strong>.</li>
            </ul>
        </div>
        <div class="main-home-body-inner">
            <h4>Éditer une Annonce</h4>
        </div>


    </div>

</div>

@endsection