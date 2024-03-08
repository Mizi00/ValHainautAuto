<?php

namespace App\Livewire;

use App\Models\Annonce;
use Livewire\Component;
use Livewire\WithPagination;

class SearchAnnonce extends Component
{   
    use WithPagination;
    public $search;
    public function render()
    {   
        $annonces = $annonces = Annonce::query()
            ->when($this->search, function ($query) {
                return $query->where('titre', 'like', "%{$this->search}%");
            })->latest()->paginate(12);
        return view('livewire.search-annonce', compact('annonces'));
    }
}
