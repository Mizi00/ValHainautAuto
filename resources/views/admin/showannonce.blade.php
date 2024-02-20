@extends('layouts.app')

@section('body')
    <div class="main-show-annonce">
        <div class="innner-show-annonce">
            <h1>Annonce n°{{ $annonce->id }}, {{ $annonce->titre }}</h1>
        </div>
    </div>
@endsection