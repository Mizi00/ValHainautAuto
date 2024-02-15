@extends('layouts.app')

@section('body')
<x-navbar />

<div class="container-login">
    <div class="login">
        <h1>Se Connecter</h1>
        <form action="" method="post" class="login-form">
            @csrf
            <input type="email" name="email" id="email" placeholder="Ex: Joe@exemple.fr" value=" {{ old('email') }}">
            @error('email')
            <div>{{ $message }}</div>
            @enderror
            <input type="password" name="password" id="password" placeholder="Mot de passe ...">
            @error('password')
            <div>{{ $message }}</div>
            @enderror
            <input type="submit" value="Connexion" id="button" name="button">
        </form>
    </div>
</div>

@endsection