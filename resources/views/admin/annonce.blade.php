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
            <table class="table-realisation">
                <thead>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Modèle</th>
                    <th>Année</th>
                    <th>CV</th>
                    <th>Carburant</th>
                    <th>URL</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Voir</th>
                </thead>
                <tbody class="table-body">
                    @foreach($annonces as $annonce)
                        <tr>
                            <td>{{ $annonce->id }}</td>
                            <td>{{ $annonce->titre }}</td>
                            <td>{{ $annonce->prix }}€</td>
                            <td>{{ $annonce->modele }}</td>
                            <td>{{ $annonce->annee }}</td>
                            <td>{{ $annonce->chevaux }} C.V</td>
                            <td>{{ $annonce->typeFuel }}</td>
                            <td><a href="{{ $annonce->url }}">{{ $annonce->url }}</a></td>
                            <td>{{ $annonce->description }}</td>
                            <td>{{ $annonce->created_at }}</td>
                            <td><a href="">Voir</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection