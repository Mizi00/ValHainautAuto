@extends('layouts.app')

@section('contact')
<meta name="descrtion" name="Chez Val Hainaut Auto votre avis nous intéresse !">
@endsection

@section('body')
<x-navbar />
<x-sidebar />
<!--SECTION CONTACT-->
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("contactForm").submit();
    }
</script>
<div class="contact">
    <h1>Contactez-Nous !</h1>

    <form action="{{ route('contact') }}" method="post">
        @csrf
        <div class="contact-np">
            <label for="">Prénom: <input type="text" name="prenom" id="prenom" placeholder="Ex: John" value="{{ old('prenom') }}"></label>
            <label for="">Nom: <input type="text" name="nom" id="nom" placeholder="Ex: Doe" value="{{ old('nom') }}"></label>
        </div>
        <label for="">Adresse Mail: <input type="text" name="mail" id="email" placeholder="Ex: john@doe.fr" value="{{ old('mail') }}"></label>
        <label for="">Numéro de téléphone: <input type="text" name="numero" id="number" placeholder="Ex: 0623431233" value="{{ old('numero') }}"></label>
        <label for="">Votre Message :
            <textarea name="message" id="msg" placeholder="Ecrire ici ..." style="height:200px">{{ old('message') }}</textarea>
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
        <input type="submit" name="Envoyer" id="button" data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}" data-callback="onSubmit" data-action="submitContact">
    </form>

</div>

@if(session('success'))
@section('js')
<script>
    butterup.toast({
        title: 'Val Hainaut Auto',
        message: '{{ session('
        success ') }}',
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