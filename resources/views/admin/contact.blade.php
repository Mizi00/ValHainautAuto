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
@if(session('success') || session('delete'))
@section('js')
<script>
    butterup.toast({
        title: ' {{ session('success') ? '✅ Val Hainaut Auto ✅ ' : '🚨 Val Hainaut Auto 🚨' }}',
        message: '{{ session('success') ? session('success') : session('delete') }}',
        location: 'top-right',
        icon: false,
        dismissable: false,
        type: '{{ session('success') ? 'success' : 'error' }}'
    });
</script>
@endsection
@endif

@endsection