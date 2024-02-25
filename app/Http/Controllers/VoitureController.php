<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index()
    {
        $annonces = Annonce::latest()->get();
        return view('client.voiture', compact('annonces'));
    }
}
