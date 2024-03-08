@extends('layouts.app')

@section('body')
<x-admin.sidebar />
<div class="main-edit-annonce">
    <div class="inner-title-edit-annonce">
        <h1>Ajouter une annonce</h1>
    </div>
    <div class="inner-text-edit-annonce">
        <form action="{{ route('annonce.validateAdd') }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="div-form-container">
                <div class="div-form">
                    <label for="">Marque:</label>
                    <input type="text" value="{{ old('titre') }}" name="titre" autocomplete="off">
                </div>
                <div class="div-form">
                    <label for="">Prix:</label>
                    <input type="number" value="{{ old('prix') }}" step="0.01" name="prix" autocomplete="off">
                </div>
            </div>

            <div class="div-form-container">
                <div class="div-form">
                    <label for="">Modèle:</label>
                    <input type="text" value="{{ old('modele') }}" name="modele" autocomplete="off">
                </div>
                <div class="div-form">
                    <label for="">Kilométrage:</label>
                    <input type="number" value="{{ old('kilometrage') }}" name="kilometrage" min="0" autocomplete="off">
                </div>
            </div>

            <div class="div-form-container">
                <div class="div-form">
                    <label for="">Année:</label>
                    <select name="annee" id="">
                        <option value="">---Selectionner---</option>
                        @for($i=1990; $i<=now()->year; $i++) <option value="{{ $i }}" {{ old('annee') == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                    </select>
                </div>
                <div class="div-form">
                    <label for="">Puissance Fiscale:</label>
                    <select name="cv" id="">
                        <option value="">---Selectionner---</option>
                        @for($i=1; $i<=15; $i++) <option value="{{ $i }}" {{ old('cv') == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                    </select>
                </div>
            </div>

            <div class="div-form-container">
                <div class="div-form">
                    <label for="">Type carburant:</label>
                    <select name="typeFuel" id="">
                        <option value="">---Sectionner---</option>
                        <option value="Essence" {{ old('typeFuel') == 'Essence' ? 'selected' : '' }}>Essence</option>
                        <option value="Diesel" {{ old('typeFuel') == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                        <option value="Éléctrique" {{ old('typeFuel') == 'Éléctrique' ? 'selected' : '' }}>Éléctrique</option>
                        <option value="Hybride" {{ old('typeFuel') == 'Hybrique' ? 'selected' : '' }}>Hybride</option>
                    </select>
                </div>
                <div class="div-form">
                    <label for="">Puissance DIN:</label>
                    <input type="number" value="{{ old('ch') }}" name="ch" min="0" autocomplete="off">
                </div>

            </div>
            <div class="div-form-container">
                <div class="div-form">
                    <label for="">URL annonce: </label>
                    <input type="text" name="url" value="{{ old('url') }}" placeholder="Ex: https://johndoe.exemple" autocomplete="off">
                </div>
                <div class="div-form">
                    <label for="">Type de boîte: </label>
                    <select name="vitesse" id="">
                        <option value="Manuelle" {{ old('vitesse') == 'Manuelle' ? 'selected' : '' }}>Manuelle</option>
                        <option value="Automatique" {{ old('vitesse') == 'Automatique' ? 'selected' : '' }}>Automatique</option>
                        <option value="Robotisé" {{ old('vitesse') == 'Robotisé' ? 'selected' : '' }}>Robotisé</option>
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
                <input type="submit" value="Ajouter">
            </div>
        </form>
    </div>
</div>
@endsection