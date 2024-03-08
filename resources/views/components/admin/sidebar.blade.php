<div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           <div class="profile">
            <img src="{{ asset('img/logo-val.png') }}" alt="">
                <h1>Admin</h1>
                <p>Val Hainaut Auto</p>
           </div>
            <ul>
                <li><a href="{{ route('homeAdmin') }}" class="{{ Route::is('homeAdmin') ? 'active' : '' }}"><i class="fa-solid fa-house"></i>  <span>Accueil</span></a></li>
                <li><a href="{{ route('annonce.index') }}" class="{{ Route::is('annonce.index') ? 'active' : '' }}"><i class="fa-solid fa-scroll"></i>  <span>Annonces</span></a></li>
                <li><a href="{{ route('contact.index') }}" class="{{ Route::is('contact.index') ? 'active' : '' }}"><i class="fa-solid fa-message"></i>  <span>Messages</span></a></li>
                <li><a href="{{ route('home') }}"><i class="fa-brands fa-safari"></i><span>Val Hainaut Auto</span></a></li>
                <li><a href="{{ route('stats') }}" class="{{ Route:: }}"><i class="fa-solid fa-chart-simple"></i> <span>Statistique</span></a></li>
                <li><a href="{{ route('logout')  }}"><i class="fa-solid fa-right-from-bracket"></i><span>Déconnexion</span></a></li>
            </ul>
        </div>
        </div>