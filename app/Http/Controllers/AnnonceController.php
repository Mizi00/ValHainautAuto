<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

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
        return view('admin.edit', compact('annonce'));
    }

    public function update(Annonce $annonce, Request $request)
    {   
        $credentials =  $request->validate([
            'titre' => 'required|max:50',
            'prix' => 'required',
            'modele' => 'required',
            'annee' => 'required',
            'kilometrage' => 'required',
            'cv' => 'required',
            'ch' => 'required',
            'typeFuel' => 'required',
            'url' => 'required',
            'img'=> 'image|mimes:jpeg,png,jpg|max:5000'
        ]);

        
        if($request->hasFile('img')){
            if($annonce->img) {
                Storage::disk('public')->delete('uploads/'.$annonce->img);
            }
            $originalImage = $request->file('img');

            $fileName = md5(time() . $originalImage->getClientOriginalName());
            Image::read($originalImage)->toWebP(85)->save("storage/uploads/{$fileName}.webp");

            $imagePath = "{$fileName}.webp";
        }

        $credentials['idUser'] = auth()->user()->id;
        $credentials['img'] = $imagePath ?? null;
        $credentials['created_at'] = Carbon::now();
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
            'titre' => 'required|max:50',
            'prix' => 'required',
            'modele' => 'required|max:50',
            'annee' => 'required',
            'kilometrage' => 'required',
            'cv' => 'required',
            'ch' => 'required',
            'typeFuel' => 'required',
            'url' => 'required|url',
            'vitesse' =>'required',
            'img' => 'image|mimes:jpeg,png,jpg|max:5000'
        ]);


        if($request->hasFile('img')){
            $originalImage = $request->file('img');

            $fileName = md5(time() . $originalImage->getClientOriginalName());
            Image::read($originalImage)->toWebP(85)->save("storage/uploads/{$fileName}.webp");

            $imagePath = "{$fileName}.webp";
        }

        $credentials['idUser'] = auth()->user()->id;
        $credentials['img'] = $imagePath ?? null;
        $credentials['created_at'] = Carbon::now();

        $annonce->insert($credentials);

        return redirect()->route('annonce.index')->with('success', 'Annonce ajouter avec succées')->withInput();
    }

    public function delete(Annonce $annonce)
    {   
        if($annonce->img) {
            Storage::disk('public')->delete('uploads/'.$annonce->img);
        }
        $annonce->delete();
        return redirect()->route('annonce.index')->with('delete', 'Annonce supprimé !');
    }
}
