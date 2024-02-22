<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
            'cv' => 'required',
            'ch' => 'required',
            'typeFuel' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        $annonce->update($credentials);

        return redirect()->route('annonce.index')->with('success', 'Annonce modifié avec succées');
    }

    public function add(Annonce $annonce)
    {
        return view('admin.add', compact('annonce'));
    }

    public function validateAdd(Annonce $annonce, Request $request)
    {
        
        $credentials = $request->validate([
            'titre' => 'required|max:100',
            'prix' => 'required',
            'modele' => 'required',
            'annee' => 'required|max:4',
            'kilometrage' => 'required',
            'cv' => 'required',
            'ch' => 'required',
            'typeFuel' => 'required',
            'url' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'description' => 'required'
        ]);
        $img = $request->file('img');
        $credentials['idUser'] = auth()->user()->id;
        $credentials['created_at'] = Carbon::now();
        $annonce->insert($credentials);

        return redirect()->route('annonce.index')->with('success', 'Annonce ajouter avec succées');
    }

    public function delete(Annonce $annonce)
    {
        $annonce->delete();
        return redirect()->route('annonce.index')->with('delete', 'Annonce supprimé !');
    }
}
