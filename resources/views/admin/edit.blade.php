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
            <form action="{{ route('annonce.update', $annonce->id) }}" method="post" enctype="multipart/form-data">
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
                        <select name="annee" id="">
                            <option value="{{ $annonce->annee }}">{{ $annonce->annee }}</option>
                            <option value="">------</option>
                            @for($i=1900; $i<=2200; $i++) @if($annonce->annee !=$i)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endif
                                @endfor
                        </select>
                    </div>
                    <div class="div-form">
                        <label for="">C.V:</label>
                        <select name="cv" id="">
                            <option value="{{ $annonce->cv }}">{{ $annonce->cv }}</option>
                            <option value="">-----</option>
                            @for($i; $i<=100; $i++) @if($annonce->cv != $i)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endif
                                @endfor
                        </select>
                    </div>
                </div>

                <div class="div-form-container">
                    <div class="div-form">
                        <label for="">Type carburant:</label>
                        <select name="typeFuel" id="">
                            <option value="{{ $annonce->typeFuel }}">{{ $annonce->typeFuel }}</option>
                            <option value="">--------------</option>
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
                        <label for="">Ch: </label>
                        <input type="number" min="0" name="ch" value="{{ $annonce->ch }}">
                    </div>
                </div>

                <div class="div-form-container">
                    <div class="div-form">
                        <label for="">URL annonce:</label>
                        <input type="text" name="url" value="{{ $annonce->url }}">
                    </div>
                    <div class="div-form">
                        <label for="">Type de boîte: </label>
                        <select name="vitesse" id="">
                            @if($annonce->vitesse !='Manuelle')
                            <option value="Manuelle">Manuelle</option>
                            @endif
                            @if($annonce->vitesse !='Automatique')
                            <option value="Automatique">Automatique</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="div-form-container">
                    <div class="div-form">
                        <label for=""><i class="fa-solid fa-upload"></i> Choisir le fichier</label>
                        <input type="file" name="img" accept="image/png, image/jpeg">
                    </div>
                </div>
                <div class="error">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="div-form-bt">
                    <input type="submit" value="Modifier">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection