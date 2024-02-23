<div>
    <div class="div-search">
        <input class="search-contact" type="text" wire:model.live="search" placeholder="Rechercher ...">
    </div>
    <table class="table-realisation">
        <thead>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Mail</th>
            <th>Tel</th>
            <th>Message</th>
            <th></th>
        </thead>
        <tbody class="table-body">
            @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->nom }}</td>
                <td>{{ $contact->prenom }}</td>
                <td><a href="mailto:{{ $contact->mail }}">{{ $contact->mail }}</a></td>
                <td>{{ $contact->numero }}</td>
                <td>{{ $contact->message }}</td>
                <td><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></td>
            </tr>
            @empty
            <tr>
                <td colspan="11">Aucune annonce ...</td>
            </tr>
            @endforelse

        </tbody>
    </table>
    {{ $contacts->links('pagination.pagination') }}
</div>