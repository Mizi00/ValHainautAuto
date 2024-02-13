@extends('layouts.app')

@section('body')

<x-navbar />

<div class="card-container">
    <div class="title-voiture">
        <h1>Nos Véhicules</h1>
        <h4>Liste des véhicules à vendre</h4>
    </div>
    
    <ul class="cards">
        @for($i=0; $i<20; $i++) <li class="cards-item">
            <div class="card">
                <div class="card-image"><img src="logo-val.png" alt=""></div>
                <div class="card-content">
                    <h2 class="card-title">Voiture</h2>
                    <p class="card-text">Voici mon véhicule</p>
                    <a href="https://www.leboncoin.fr/boutique/428532/val_hainaut_auto.htm" target="_blank"><button class="card-button">Voir Plus</button></a>
                </div>
            </div>
            </li>
            @endfor
    </ul>

</div>


<x-footer />