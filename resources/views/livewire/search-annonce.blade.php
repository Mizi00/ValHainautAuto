<div class="cards-contain">
    <div class="search-annonce">
        <input class="search" type="text" wire:model.live="search" placeholder="Rechercher ...">
    </div>
    <ul class="cards">
        @forelse($annonces as $annonce)
        <li class="cards-item">
            <div class="card">
                <div class="card-image"><img src="{{ asset('storage/uploads/'.$annonce->img) }}" alt=""></div>
                <div class="card-content">
                    <div>
                        <h2 class="card-title">{{ $annonce->titre }}</h2>
                        <ul class="card-list">
                            <li><i class="fa-solid fa-list"></i> | Modèle: <strong>{{ $annonce->modele }}</strong></li>
                            <li><i class="fa-solid fa-calendar-days"></i> | Année: <strong>{{ $annonce->annee }}</strong></li>
                            <li><i class="fa-solid fa-gauge"></i> Kilométrage: <strong>{{ $annonce->kilometrage }} Km</strong></li>
                            <li><i class="fa-solid fa-scale-unbalanced-flip"></i> Puissance fiscal: <strong>{{ $annonce->cv }} Cv</strong></li>
                            <li><i class="fa-solid fa-car"></i> Puissance DIN: <strong>{{ $annonce->ch }} Ch</strong></li>
                            <li><i class="ti ti-manual-gearbox"></i> Type boîte: <strong>{{ $annonce->vitesse }}</strong></li>
                            <li><i class="fa-solid fa-gas-pump"></i> Carburant: <strong>{{ $annonce->typeFuel }}</strong></li>
                            <li><i class="fa-solid fa-tags"></i> Montant: <strong>{{ $annonce->prix }} €</strong></li>
                        </ul>
                        <p class="card-text">{{ Str::limit($annonce->description, 50) }}</p>
                    </div>

                    <a href="{{ $annonce->url }}" target="_blank"><button class="card-button">Voir Plus</button></a>
                </div>
            </div>
        </li>
        @empty
        <div class="empty-card">
            <div><i class="fa-solid fa-face-meh"></i></div>
            <p>Pas de véhicule pour l'instant ...</p>
        </div>

        @endforelse
    </ul>
    <div class="pagination-annonce">
        {{ $annonces->links('pagination.pagination') }}
    </div>
    

</div>