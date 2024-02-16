<?php

namespace App\Livewire;

use App\Models\Annonce as AnnonceModel;
use Livewire\Component;
use Livewire\WithPagination;

class Annonce extends Component
{
    use WithPagination;
    
    public $search;
    
    public function render()
    {
        $annonces = AnnonceModel::query()
            ->when($this->search, function($query){
                return $query->where('titre', 'like', "%{$this->search}%");
            })->paginate(10);
        
        return view('livewire.annonce', compact('annonces'));
    }
}
