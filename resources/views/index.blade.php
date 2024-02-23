@extends('layouts.app')

@section('body')
<x-navbar />

<!--SECTION HERO-->
<section class="hero">
    <div class="hero-inner">
        <h1>VAL HAINAUT AUTO</h1>
        <h4>Fait toujours le suivi de ses clients. Vous êtes prioritaires.</h4>
        <a class="button-hero-button" href="#propos-id"><div class="button-hero">Voir Plus<i class="fa-solid fa-arrow-down"></i></div></a>
    </div>
</section>

<!--SECTION PROPOS-->
<section class="propos">
    <div class="propos-inner" id="propos-id">
        <h1>Qui Sommes-Nous ?</h1>
        <div class="propos-text">
            Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiores extollere. Sunt enim quidam qui molestas amicitias faciunt, cum ipsi se contemni putant; quod non fere contingit nisi iis qui etiam contemnendos se arbitrantur; qui hac opinione non modo verbis sed etiam opere levandi sunt.

            Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.
        </div>
    </div>
</section>

<!--SECTION SERVICES-->
<section class="service" id="service-id">
    <div class="service-bk">
        <div class="service-inner">
            <i class="fa-solid fa-handshake-simple" id="icon_handshake"></i>
            <h1>Service n°1</h1>
            <div class="service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam asperiores natus adipisci ab, modi harum deserunt, assumenda ad minus, beatae obcaecati tempora odio repellat facere qui vero nostrum et! Natus.
            </div>
        </div>
        <div class="service-inner">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <h1>Service n°2</h1>
            <div class="service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam aspernatur sapiente officia debitis dolores vitae, perspiciatis atque at, in, quos iure corrupti quisquam aperiam fugiat cum quae iusto quasi omnis.
            </div>
        </div>
        <div class="service-inner">
            <i class="fa-regular fa-credit-card" id="icon_card"></i>
            <h1>Service n°3</h1>
            <div class="service-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque porro quo vitae quisquam! Minima in ipsa, quos, voluptatum quidem quisquam repudiandae laboriosam aperiam blanditiis quasi fuga officiis ex deserunt dolorem?
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