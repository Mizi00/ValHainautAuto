<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Contact $contact){
        return view('client.contact', compact('contact'));
    }

    public function validateContact(Request $request, Contact $contact) {
        $credentials = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required|email',
            'numero' => 'required',
            'message' => 'required|min:5|max:1000'
        ]);

        $credentials['created_at'] = Carbon::now();
        $contact->insert($credentials); 
        

        return redirect()->route('contact.index')->with('success', 'Formulaire envoyer !');

        
    }  
    
    public function delete(Contact $contact) {
        $contact->delete();
        return redirect()->route('contact.index')->with('delete', 'Message Supprimer');
    }
}