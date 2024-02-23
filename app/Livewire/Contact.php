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
                return $query->where('mail', 'like', "%{$this->search}%");
            })->paginate(10);
        
        return view('livewire.contact', compact('contacts'));
    }
}
