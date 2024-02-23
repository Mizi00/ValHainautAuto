@extends('layouts.app')

@section('body')

<x-admin.sidebar/>

<div class="main-contact">
    <div class="main-contact-header">
        <h1>Les Messages</h1>
        <p>Retrouvez ici la liste des messages des visiteur du site Val Hainaut Auto</p>
    </div>
    <div class="main-contact-body">
        <div class="main-contact-body-header">
            <h1>Les Messages</h1>
        </div>
        <div class="main-contact-body-table">
            @livewire('contact')
        </div>
    </div>
</div>

@endsection