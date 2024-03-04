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
                $query->where('titre', 'like', "%{$this->search}%");
                $query->orWhere('id', 'like', "{$this->search}");

                return $query;  
            })->paginate(10);
        
        return view('livewire.annonce', compact('annonces'));
    }
}
