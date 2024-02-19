<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('client.contact');
    }

    public function validateContact(Request $request, Contact $contact) {
        $credentials = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required|email',
            'numero' => 'required',
            'message' => 'required|min:5|max:1000'
        ]);

        $contact->insert($credentials);

        return redirect()->route('contact')->with('success', 'Formulaire envoyer !');

        
    }   
}