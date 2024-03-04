<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact as ContactModel;

class Contact extends Component
{
    use WithPagination;
    
    public $search;
    
    public function render()
    {
        $contacts = ContactModel::query()
            ->when($this->search, function($query){
                $query->where('mail', 'like', "%{$this->search}%");
                $query->orWhere('prenom', 'like', "%{$this->search}%");
                $query->orWhere('nom', 'like', "%{$this->search}%");
                $query->orWhere('numero', 'like', "%{$this->search}%");
                
                return $query;
            })->paginate(10);
        
        return view('livewire.contact', compact('contacts'));
    }
}
