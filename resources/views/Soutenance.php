<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soutenance extends Model
{
    protected $table = 'soutenance';

    protected $fillable = [
        'nom_complet',
        'email',
        'numero_telephone',
        'profession',
        'message',
        'lu',
    ];

    protected $casts = [
        'lu' => 'boolean',
    ];
}