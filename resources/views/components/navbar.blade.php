<header class="header">
    <div class="header-logo">
        <h1 class="logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo-val.png') }}" alt=""><div><span class="span-h1-garage">Garage<span class="span-h1-bar"></span></span><span class="span-h1-title">Val hainaut Auto</span></div></a></h1>
    </div>  
    
    <ul class="main-nav">
        @auth
            <li><a href="{{ route('homeAdmin') }}"><span>Tableau de Bord</span></a></li>
        @endauth
        <li><a href="{{ route('home') }}#propos-id"><span>Qui sommes-nous</span></a></li>
        <li><a href="{{ route('home') }}#service-id"><span>Nos services</span></a></li>
        <li><a href="{{ route('voiture') }}"><span>Véhicules</span></a></li>
        <li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
    </ul>
    <div class="button-sidebar" id="button-sidebar"><a><i class="fa-solid fa-bars"></i></a></div>
</header>
<div class="header-space"></div>