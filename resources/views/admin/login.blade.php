@extends('layouts.app')

@section('body')
<x-navbar/>

<div class="login">
    <div class="contain-login">
        <h3>Se Connecter</h3>
        <form action="">
            <input type="text" name="email" id="email" placeholder="Ex: Joe@exemple.fr">
            <input type="password" name="password" id="password" placeholder="Mot de passe ...">
            <input type="submit" value="Connexion" id="button" name="button">
        </form>
    </div>

</div>
@endsection