@extends('layouts.app')

@section('body')
<x-admin.sidebar />
<div class="main-edit-annonce">
    <div class="inner-title-edit-annonce">
        <h1>Ajouter une annonce</h1>        
    </div>  
    <div class="inner-text-edit-annonce">
        <form action="{{ route('annonce.validateAdd') }}" method="post">
            @method('patch')
            @csrf
            <div class="div-form-container">
                <div class="div-form">
                    <label for="">Nom / Titre:</label>
                    <input type="text" name="titre">
                </div>
                <div class="div-form">
                    <label for="">Prix:</label>
                    <input type="number" name="prix">
                </div>
            </div>

            <div class="div-form-container">
                <div class="div-form">
                    <label for="">Modèle:</label>
                    <input type="text" name="modele">
                </div>
                <div class="div-form">
                    <label for="">Kilométrage:</label>
                    <input type="number" name="kilometrage" min="0">
                </div>
            </div>

            <div class="div-form-container">
                <div class="div-form">
                    <label for="">Année:</label>
                    <input type="text" name="annee">
                </div>
                <div class="div-form">
                    <label for="">C.V:</label>
                    <input type="number" name="chevaux" min="0">
                </div>
            </div>

            <div class="div-form-container">
                <div class="div-form">
                    <label for="">Type carburant:</label>
                    <select name="typeFuel" id="">
                        <option value="">--Sectionnez--</option>
                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Éléctrique">Éléctrique</option>
                        <option value="Hybride">Hybride</option>
                    </select>
                </div>
                <div class="div-form">
                    <label for="">URL annonce:</label>
                    <input type="url" name="url" value="" placeholder="Ex: https://johndoe.exemple">
                </div>
            </div>

            <div class="div-form">
                <label for="">Description:</label>
                <textarea name="description" id="" cols="60" rows="10" placeholder="Écrire la description du véhicule ..."></textarea>
            </div>
            <div class="div-form-bt">
                <input type="submit" value="Ajouter">
            </div>
        </form>
    </div>
</div>
@endsection