<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $table = 'medecins';

    protected $fillable = [
        'prenom',
        'nom',
        'specialite',
        'age',
        'image'
    ];
}