@extends('layouts.app')

@section('body')
<x-navbar />

<div class="container-login">
    <div class="login">
        <h1>Se Connecter</h1>
        <form action="" class="login-form">
            <input type="text" name="email" id="email" placeholder="Ex: Joe@exemple.fr">
            <input type="password" name="password" id="password" placeholder="Mot de passe ...">
            <input type="submit" value="Connexion" id="button" name="button">
        </form>
    </div>
</div>

@endsection