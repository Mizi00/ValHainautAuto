<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index()
    {
        return view('admin.annonce'); //affiche les annonces dans le tableau de bord
    }

    public function show(Annonce $annonce)
    {
        return view('admin.showannonce', compact('annonce'));
    }

    public function edit(Annonce $annonce)
    {
        return view('admin.edit', compact(
            'annonce'
        ));
    }

    public function update(Annonce $annonce, Request $request)
    {
        $credentials =  $request->validate([
            'titre' => 'required',
            'prix' => 'required',
            'modele' => 'required',
            'annee' => 'required',
            'kilometrage' => 'required',
            'chevaux' => 'required',
            'typeFuel' => 'required',   
            'url' => 'required',
            'description' => 'required' 
        ]);

        $annonce->update($credentials);

        return redirect()->route('annonce.index')->with('success', 'Annonce modifié avec succées');
    }
}
