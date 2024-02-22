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
            <form action="{{ route('annonce.update', $annonce->id) }}" method="post">
                @method('patch')
                @csrf
                <div class="div-form-container">
                    <div class="div-form">
                        <label for="">Nom / Titre:</label>
                        <input type="text" name="titre" value="{{ $annonce->titre }}">
                    </div>
                    <div class="div-form">
                        <label for="">Prix:</label>
                        <input type="number" step="0.01" name="prix" value="{{ $annonce->prix }}">
                    </div>
                </div>

                <div class="div-form-container">
                    <div class="div-form">
                        <label for="">Modèle:</label>
                        <input type="text" name="modele" value="{{ $annonce->modele }}">
                    </div>
                    <div class="div-form">
                        <label for="">Kilométrage:</label>
                        <input type="number" name="kilometrage" min="0" value="{{ $annonce->kilometrage }}">
                    </div>
                </div>

                <div class="div-form-container">
                    <div class="div-form">
                        <label for="">Année:</label>
                        <input type="text" name="annee" value="{{ $annonce->annee }}">
                    </div>
                    <div class="div-form">
                        <label for="">C.V:</label>
                        <input type="number" name="cv" min="0" value="{{ $annonce->chevaux }}">
                    </div>
                </div>

                <div class="div-form-container">
                    <div class="div-form">
                        <label for="">Type carburant:</label>
                        <select name="typeFuel" id="">
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
                        <label for="">Ch</label>
                        <input type="number" min="0" name="ch">
                    </div>
                </div>

                <div class="div-form-container">
                    <div class="div-form">
                        <label for="">URL annonce:</label>
                        <input type="url" name="url" value="{{ $annonce->url }}">
                    </div>
                </div>

                <div class="txtarea">
                    <label for="">Description:</label>
                    <textarea name="description" id="" cols="60" rows="10">{{ $annonce->description }}</textarea>
                </div>
                <div class="div-form-bt">
                    <input type="submit" value="Modifier">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection