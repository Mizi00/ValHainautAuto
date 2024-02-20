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
                <label for="">Nom / Titre: <input type="text" value="{{ $annonce->titre }}"></label>
                <label for="">Prix: <input type="number" value="{{ $annonce->prix }}"></label>
                <label for="">Modèle: <input type="text" value="{{ $annonce->modele }}"></label>
                <label for="">Année: <input type="text" value="{{ $annonce->annee }}"></label>
                <label for="">C.V: <input type="number" min="0" value="{{ $annonce->chevaux }}"></label>
                <label for="">Type carburant: <input type="text" value="{{ $annonce->typeFuel }}"></label>
                <!--<select name="type" id="">
                    <option value="{{ $annonce->typeFuel }}">{{ $annonce->typeFuel }}</option>
                    <option value=""></option>
                </select>-->
                <label for="">URL annonce: <input type="url" value="{{ $annonce->url }}"></label>
                <label for="">Description: <textarea name="" id="" cols="30" rows="10">{{ $annonce->description }}</textarea></label>
            </form>

        </div>
    </div>
</div>
@endsection