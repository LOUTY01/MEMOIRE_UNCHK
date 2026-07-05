<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Medecin extends Model
{
    use HasFactory;

    protected $table = 'medecins';

    protected $fillable = [
        'prenom',
        'nom',
        'specialite',
        'age',
        'image',
        'user_id', // IMPORTANT
    ];

    /**
     * =========================
     * RELATION : MEDECIN → USER
     * =========================
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}