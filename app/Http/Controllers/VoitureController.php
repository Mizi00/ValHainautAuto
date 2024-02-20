<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index()
    {
        $annonces = Annonce::all();
        return view('client.voiture', compact('annonces'));
    }
}
