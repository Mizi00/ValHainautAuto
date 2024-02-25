@extends('layouts.app')

@section('body')
<x-admin.sidebar />
<div class="main-show-contact">
    <div class="main-show-contact-inner">
        <div class="main-show-contact-inner-title">
            <h1>Message n°{{ $contact->id }} | Prénom ➜ {{ $contact->prenom }} | Nom ➜ {{ $contact->nom }}</h1>
        </div>
        <div class="main-show-contact-text">
            <div class="main-show-contact-text-button">
                <a href="{{ route('contact.delete', $contact->id) }}">Supprimer Message</a>
            </div>
            <p><strong>Id Message:</strong> {{ $contact->id }}</p>
            <p><strong>Nom:</strong> {{ $contact->nom }}</p>
            <p><strong>Prénom:</strong> {{ $contact->prenom }}</p>
            <p><strong>Mail:</strong> <a href="mailto:{{ $contact->mail }}">{{ $contact->mail }}</a></p>
            <p><strong>Tel:</strong> {{ $contact->numero }}</p>
            <p><strong>Message:</strong> {{ $contact->message }}</p>
        </div>
    </div>
</div>
@endsection