@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />

<!--SECTION HERO-->
<section class="hero">
    <div class="hero-inner">
        <h1>VAL HAINAUT AUTO</h1>
        <h4>Fait toujours le suivi de ses clients. Vous êtes prioritaires.</h4>
        <a class="button-hero-button" href="#propos-id">
            <div class="button-hero">Voir Plus<i class="fa-solid fa-arrow-down"></i></div>
        </a>
    </div>
</section>

<!--SECTION PROPOS-->
<section class="propos">
    <div class="propos-inner" id="propos-id">
        <h1>Qui Sommes-Nous ?</h1>
        <div class="propos-text">
            <p>
                Bienvenue chez <strong>Val Hainaut Auto</strong>, votre partenaire automobile de confiance dans la région ! Nous sommes fiers de vous offrir une expérience complète, allant de la vente de véhicules d'occasion de qualité à la reprise avantageuse de votre ancien véhicule. Notre équipe dévouée se spécialise également dans la réparation méticuleuse de véhicules, assurant ainsi la longévité et la performance de votre investissement automobile.</p>

            <p>Chez <strong>Val Hainaut Auto</strong>, nous comprenons que chaque client est unique, c'est pourquoi nous proposons un service personnalisé et professionnel pour la création rapide de cartes grises. Simplifiez vos démarches administratives avec notre assistance experte.</p>

            <p>Faites confiance à notre expertise éprouvée et à notre engagement envers la satisfaction client. Val Hainaut Auto, là où la qualité et le service se rencontrent sur la route de votre tranquillité d'esprit automobile. Explorez notre inventaire, profitez de nos services et découvrez une nouvelle dimension dans le monde automobile.</p>

        </div>
    </div>
</section>

<!--SECTION SERVICES-->
<section class="service" id="service-id">
    <div class="service-bk">
        <div class="service-inner">
            <i class="fa-solid fa-handshake-simple" id="icon_handshake"></i>
            <h1>Rachat de votre véhicule</h1>
            <div class="service-text">
                <p>

                    Transformez votre ancien véhicule en opportunité avec Val Hainaut Auto. Notre service de rachat propose une évaluation rapide et équitable, simplifiant le processus pour vous.
                </p>
            </div>
        </div>
        <div class="service-inner">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <h1>Mécanique</h1>
            <div class="service-text">
                <p>
                    Val Hainaut Auto prend soin de votre voiture avec expertise. De la mécanique à la carrosserie, notre service de réparation assure une qualité sans compromis. Roulez en toute confiance, car votre satisfaction est notre priorité absolue.
                </p>
            </div>
        </div>
        <div class="service-inner">
            <i class="fa-regular fa-credit-card" id="icon_card"></i>
            <h1>Carte Grise</h1>
            <div class="service-text">
                <p>
                    Simplifiez vos démarches administratives avec Val Hainaut Auto. Notre service de création de cartes grises vous offre une expérience sans tracas.
                </p>
            </div>
        </div>
    </div>
</section>


<!--SECTION GOOGLE MAP-->
<section class="map">
    <div class="propos-video">
        <h1>En Vidéo...</h1>
        <div class="propos-video-inner">
            <div class="propos-video-inner-single">
                <iframe src="https://www.youtube.com/embed/2bvG0jZMqdE" title="VAL HAINAUT AUTO Atelier &amp; Réparation" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <hr width="1" size="200" color="black" />
                <p>Atelier & Réparation </p>
            </div>
            <div class="propos-video-inner-single">
                <p>Notre Fonctionnement</p>
                <hr width="1" size="200" color="black" />
                <iframe src="https://www.youtube.com/embed/R10Yc3DnZKw" title="Vidéo de présentation   Val Hainaut Auto" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="map-inner">
        <h1>Nous retrouvez ...</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2546.2088665013307!2d3.508659776550962!3d50.344009571572016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edaf6d3cb8cb%3A0x7001af2a1c62840e!2sVAL%20HAINAUT%20AUTO!5e0!3m2!1sfr!2sfr!4v1706715589431!5m2!1sfr!2sfr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<x-scrollup />
<x-footer />

@endsection