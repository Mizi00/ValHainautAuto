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
            return view('admin.edit', compact('annonce'
        ));
    }
}
