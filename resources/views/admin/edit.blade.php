@extends('layouts.app')

@section('body')
<x-admin.sidebar />
<div class="main-edit-annonce">
    <div class="inner-edit-annonce">
        <div class="inner-edit-annonce-title">
            <h1>Éditeur d'annonce</h1>
            <p>Annonce n°{{ $annonce->id }} ➜ {{ $annonce->titre }}</p>
        </div>
        <div class="inner-edit-annonce-text">
            <form action="" method="post">
                @method('patch')
                @csrf
                <div class="div-form">
                    <label for="">Nom / Titre:</label>
                    <input type="text" value="{{ $annonce->titre }}">
                </div>
                <div class="div-form">
                    <label for="">Prix:</label>
                    <input type="number" value="{{ $annonce->prix }}">
                </div>
                <div class="div-form">
                    <label for="">Modèle:</label>
                    <input type="text" value="{{ $annonce->modele }}">
                </div>
                <div class="div-form">
                    <label for="">Année:</label>
                    <input type="text" value="{{ $annonce->annee }}">
                </div>
                <div class="div-form">
                    <label for="">C.V:</label>
                    <input type="number" min="0" value="{{ $annonce->chevaux }}">
                </div>
                <div class="div-form">
                    <label for="">Type carburant:</label>
                    <select name="type" id="">
                        <option value="{{ $annonce->typeFuel }}">{{ $annonce->typeFuel }}</option>
                        @if($annonce->typeFuel !='Essence')
                        <option value="Essence">Essence</option>
                        @endif
                        @if($annonce->typeFuel !='Diesel')
                        <option value="Diesel">Diesel</option>
                        @endif
                        @if($annonce->typeFuel !='Éléctrique')
                        <option value="Éléctrique">Éléctrique</option>
                        @endif
                        @if($annonce->typeFuel !='Hybride')
                        <option value="Hybride">Hybride</option>
                        @endif
                    </select>
                </div>
                <div class="div-form">
                    <label for="">URL annonce:</label>
                    <input type="url" value="{{ $annonce->url }}">
                </div>
                <div class="div-form">
                    <label for="">Description:</label>
                    <textarea name="" id="" cols="30" rows="10">{{ $annonce->description }}</textarea>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection