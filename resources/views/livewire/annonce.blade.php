<div>
    <div class="div-search">
        <input class="search-annonce" type="text" wire:model.live="search" placeholder="Rechercher ...">
    </div>
    <table class="table-realisation">
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Kilométrage</th>
            <th>CV</th>
            <th>CH</th>
            <th>Carburant</th>
            <th>URL</th>
            <th>Description</th>
            <th>Date</th>
            <th></th>
        </thead>
        <tbody class="table-body">
            @forelse($annonces as $annonce)
            <tr>        
                <td>{{ $annonce->id }}</td>
                <td>{{ $annonce->titre }}</td>
                <td>{{ $annonce->prix }}€</td>
                <td>{{ $annonce->modele }}</td>
                <td>{{ $annonce->annee }}</td>
                <td>{{ $annonce->kilometrage }} Km</td>
                <td>{{ $annonce->cv }} Cv</td>
                <td>{{ $annonce->ch }} Ch</td>
                <td>{{ $annonce->typeFuel }}</td>
                <td><a href="{{ $annonce->url }}" target="_blank">{{ $annonce->url }}</a></td>
                <td>{{ $annonce->description }}</td>
                <td>{{ $annonce->created_at }}</td>
                <td class="tb-td-link"><a href="{{ route('annonce.show', $annonce->id) }}"><i class="fa-regular fa-eye"></i></a> <a href="{{ route('annonce.delete', $annonce->id) }}"><i class="fa-regular fa-trash-can"></i></a></td>
            </tr>
            @empty  
            <tr>
                <td colspan="11">Aucune annonce ...</td>
            </tr>
            @endforelse

        </tbody>
    </table>
    {{ $annonces->links('pagination.pagination') }}
</div>