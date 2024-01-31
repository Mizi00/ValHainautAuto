@extends('layouts.app')

@section('body')
<x-navbar/>
<!--SECTION CONTACT-->
<div class="contact">
    <h1>Contactez-Nous !</h1>
    <form action="">
        <div class="contact-np">
            <label for="">Prénom: <input type="text" name="prenom" id="prenom"></label>
            <label for="">Nom: <input type="text" name="nom" id="nom"></label>
        </div>
        <label for="">Adresse Mail: <input type="text" name="email" id="email"></label>
        <label for="">Votre Message :
            <textarea name="msg" id="msg" placeholder="Ecrire ici ..." style="height:200px"></textarea>
        </label>
        <input type="submit" name="Envoyer" id="button">
    </form>
</div>

@endsection