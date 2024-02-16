<header class="header">
    <div class="header-logo">
        <h1 class="logo"><a href="{{ route('home') }}"><img src="logo-val.png" alt=""><div><span class="span-h1-garage">Garage<span class="span-h1-bar"></span></span><span class="span-h1-title">Val hainaut Auto</span></div></a></h1>
    </div>  
    
    <ul class="main-nav">
        @if(auth()->check())
            <li><a href="{{ route('homeAdmin') }}">Tableau de Bord</a></li>
        @endif
        <li><a href="{{ route('home') }}#propos-id">Qui sommes-nous</a></li>
        <li><a href="{{ route('home') }}#service-id">Nos services</a></li>
        <li><a href="{{ route('voiture') }}">Véhicules</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
    <div class="button-sidebar" id="button-sidebar"><a><i class="fa-solid fa-bars"></i></a></div>
</header>
<div class="header-space"></div>