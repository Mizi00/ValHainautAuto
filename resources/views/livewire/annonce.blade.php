<div>
    <div class="div-search">
        <input class="search-annonce" type="text" wire:model.live="search" placeholder="Rechercher ...">
    </div>
    <table class="table-realisation">
        <thead>
            <th>VO</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Kilométrage</th>
            <th>Puissance Fiscal</th>
            <th>Puissance DIN</th>
            <th>Carburant</th>
            <th>Prix</th>
            <th>URL</th>
            <th>Date</th>
            <th></th>
        </thead>
        <tbody class="table-body">
            @forelse($annonces as $annonce)
            <tr>        
                <td>{{ $annonce->id }}</td>
                <td>{{ $annonce->titre }}</td>
                <td>{{ $annonce->modele }}</td>
                <td>{{ $annonce->annee }}</td>
                <td>{{ $annonce->kilometrage }} <strong>Km</strong></td>
                <td>{{ $annonce->cv }} <strong>Cv</strong></td>
                <td>{{ $annonce->ch }} <strong>Ch</strong></td>
                <td>{{ $annonce->typeFuel }}</td>
                <td>{{ $annonce->prix }}€</td>
                <td><a href="{{ $annonce->url }}" target="_blank">{{ $annonce->url }}</a></td>
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