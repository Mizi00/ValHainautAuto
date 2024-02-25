<div>
    <div class="div-search">
        <input class="search-contact" type="text" wire:model.live="search" placeholder="Rechercher ...">
    </div>
    <table class="table-realisation">
        <thead>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Mail <i class="fa-solid fa-envelope"></i></th>
            <th>Tel <i class="fa-solid fa-phone"></i></th>
            <th>Message <i class="fa-solid fa-message"></i></th>
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
                <td><a href="{{ route('contact.show', $contact->id) }}"><i class="fa-solid fa-comment"></i></a> <a href="{{ route('contact.delete', $contact->id) }}"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            @empty
            <tr>
                <td colspan="11">Aucun message ...</td>
            </tr>
            @endforelse

        </tbody>
    </table>
    {{ $contacts->links('pagination.pagination') }}
</div>