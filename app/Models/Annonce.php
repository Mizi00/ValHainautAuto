<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'prix', 'modele', 'annee', 'kilometrage', 'chevaux', 'typeFuel', 'url', 'img']; //pour edit en masse des attribu
}
