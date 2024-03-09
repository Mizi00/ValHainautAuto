<div class="sidebar-client" id="sidebar-client">
    <div class="sidebar-client-cross" >
        <i class="fa-solid fa-xmark" id="cross"></i>
    </div>
    <ul class="main-nav">
        @auth
        <li><a href="{{ route('homeAdmin') }}"><span>Tableau de Bord</span></a></li>
        @endauth
        <li><a href="{{ route('home') }}#propos-id" id="side-sommes"><span>Qui sommes-nous</span></a></li>
        <li><a href="{{ route('home') }}#service-id" id="side-service"><span>Nos services</span></a></li>
        <li><a href="{{ route('voiture') }}"><span>Véhicules</span></a></li>
        <li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
    </ul>
    <img src="{{ asset('img/logo-site.png') }}" alt="">
</div>
<div class="mask" id="mask"></div> <!--div qui va servir à faire un effet sombre à coté de la sidebar-->