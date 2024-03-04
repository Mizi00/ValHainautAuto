@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />
<!--SECTION CONTACT-->

<div class="contact">
    <h1>Contactez-Nous !</h1>

    <form action="{{ route('contact') }}" method="post">
        @csrf
        <div class="contact-np">
            <label for="">Prénom: <input type="text" name="prenom" id="prenom" placeholder="Ex: John"></label>
            <label for="">Nom: <input type="text" name="nom" id="nom" placeholder="Ex: Doe"></label>
        </div>
        <label for="">Adresse Mail: <input type="text" name="mail" id="email" placeholder="Ex: john@doe.fr"></label>
        <label for="">Numéro de téléphone: <input type="text" name="numero" id="number" placeholder="Ex: 0623431233"></label>
        <label for="">Votre Message :
            <textarea name="message" id="msg" placeholder="Ecrire ici ..." style="height:200px"></textarea>
        </label>
        <div class="form-error">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <input type="submit" name="Envoyer" id="button">
    </form>

</div>

@if(session('success'))
@section('js')
<script>
    butterup.toast({
        title: 'Val Hainaut Auto',
        message: '{{ session('success') }}',
        success: true,
        location: 'top-right',
        icon: true,
        dismissable: false,
        type: 'success'
    });
</script>
@endsection
@endif

<x-scrollup />
<x-footer />

@endsection