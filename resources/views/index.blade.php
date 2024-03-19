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
            <img src="{{ asset('img/bureau-garage.jpg') }}" alt="">
            <p>
                Cumulant au total plus de <strong>18 années d’expérience</strong> dans l’automobile, <strong>Val Hainaut Auto</strong> a choisi de vous proposer son expertise au profit de ses clients.
                Nous mettons à disposition un service de grande qualité tout en maintenant des prix attractifs.
                Nos véhicules sont soigneusement sélectionnés auprès des concessionnaires chaque marque et reconditionnés dans nos ateliers. Ainsi nous pouvons vous garantir la fiabilité de tous nos modèles mis en vente.
            </p>

        </div>
    </div>
</section>

<!--SECTION SERVICES-->
<section class="service" id="service-id">
    <div class="service-bk">
        <div class="service-inner">
            <i class="fa-solid fa-cart-shopping"></i>
            <h1>VENTE</h1>
            <div class="service-text">
                <p>
                    <strong>Selectionnés</strong>, <strong>testés</strong> et <strong>reconditionnés</strong> par nos soins. Votre achat en toute simplicité.
                </p>
            </div>
        </div>
        <div class="service-inner">
            <i class="fa-solid fa-key"></i>
            <h1>REPRISE</h1>
            <div class="service-text">
                <p>
                    En toute simplicité et <strong>sans obligation</strong>. Expertise <strong>gratuite</strong> de votre véhicule.
                </p>
            </div>
        </div>
        <div class="service-inner">
            <i class="fa-regular fa-credit-card" id="icon_card"></i>
            <h1>SERVICE CARTE GRISE</h1>
            <div class="service-text">
                <p>
                    Agréé par la <strong>Préfecture</strong>, proposé de manière simplifié et rapide.
                </p>
            </div>
        </div>
        <div class="service-inner">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <h1>ENTRETIEN <span>/</span> <span class="tt">-</span> Réparation <span class="tt">-</span> diagnostic</h1>
            <div class="service-text">
                <p>
                    Votre entretien <strong>complet</strong> en toute tranquilité. Sur véhicule toute marque.
                </p>
            </div>
        </div>
        <div class="service-inner">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" zoomAndPan="magnify" viewBox="0 0 75 93.749996" height="155" preserveAspectRatio="xMidYMid meet" version="1.0">
                <path fill="#e9ecef" d="M 67.910156 55.078125 C 68.65625 52.289062 73.023438 49.878906 73.023438 46.855469 C 73.023438 43.832031 68.65625 41.421875 67.914062 38.632812 C 67.144531 35.746094 69.703125 31.472656 68.246094 28.945312 C 66.769531 26.382812 61.789062 26.480469 59.714844 24.398438 C 57.644531 22.320312 57.742188 17.320312 55.1875 15.835938 C 52.667969 14.375 48.410156 16.941406 45.535156 16.171875 C 42.753906 15.425781 40.355469 11.042969 37.34375 11.042969 C 34.328125 11.042969 31.929688 15.425781 29.148438 16.171875 C 26.273438 16.941406 22.015625 14.375 19.5 15.835938 C 16.945312 17.320312 17.042969 22.320312 14.96875 24.398438 C 12.894531 26.480469 7.914062 26.382812 6.4375 28.945312 C 4.980469 31.472656 7.539062 35.746094 6.773438 38.632812 C 6.03125 41.421875 1.664062 43.832031 1.664062 46.855469 C 1.664062 49.878906 6.03125 52.289062 6.773438 55.078125 C 7.539062 57.964844 4.980469 62.238281 6.4375 64.765625 C 7.914062 67.328125 12.894531 67.230469 14.96875 69.3125 C 17.039062 71.390625 16.945312 76.390625 19.5 77.875 C 22.015625 79.335938 26.273438 76.765625 29.148438 77.539062 C 31.929688 78.285156 34.328125 82.667969 37.34375 82.667969 C 40.355469 82.667969 42.753906 78.285156 45.535156 77.539062 C 48.410156 76.765625 52.667969 79.335938 55.1875 77.875 C 57.738281 76.390625 57.640625 71.390625 59.714844 69.3125 C 61.789062 67.230469 66.769531 67.328125 68.246094 64.765625 C 69.703125 62.238281 67.144531 57.964844 67.910156 55.078125 Z M 32.730469 59.039062 L 22.601562 48.808594 L 27.519531 43.839844 L 32.875 49.246094 L 47.308594 34.671875 L 52.082031 39.492188 Z M 32.730469 59.039062 " fill-opacity="1" fill-rule="nonzero" />
            </svg>

            <h1>GARANTIE</h1>
            <div class="service-text">
                <p>
                    Nous <strong>garantissons</strong> tous nos véhicules, <strong>testés</strong> et <strong>reconditionnés</strong> dans nos atelier dédiés.
                </p>
            </div>
        </div>
    </div>
</section>


<!--SECTION GOOGLE MAP-->
<section class="map">
    <div class="propos-video">
        <h1>Nos Vidéo</h1>
        <div class="propos-video-inner">
            <div class="propos-video-inner-single one">
                <iframe src="https://www.youtube.com/embed/2bvG0jZMqdE" title="VAL HAINAUT AUTO Atelier &amp; Réparation" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <hr width="1" size="200" color="black" />
                <p>Atelier & Réparation </p>
            </div>
            <div class="propos-video-inner-single two">
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