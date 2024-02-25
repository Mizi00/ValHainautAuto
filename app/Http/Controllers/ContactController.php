<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Contact $contact)
    {
        return view('client.contact', compact('contact'));
    }

    public function validateContact(Request $request, Contact $contact)
    {
        $credentials = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required|email',
            'numero' => 'required',
            'message' => 'required|min:5|max:5000'
        ]);

        $credentials['created_at'] = Carbon::now();
        $contact->insert($credentials);

        return redirect()->route('contact')->with('success', 'Merci pour votre message !');
    }

    public function show(Contact $contact)
    {
        return view('admin.showcontact', compact('contact'));
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('delete', 'Message Supprimer');
    }
}
