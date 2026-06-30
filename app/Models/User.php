<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * Champs autorisés en insertion
     */
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'date_naissance',
        'sexe',
        'password',
        'role',
    ];

    /**
     * Champs cachés
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Cast des types
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Vérifie si l'utilisateur est administrateur
     */
    public function isAdmin()
    {
        return $this->role === 'administrateur';
    }

    /**
     * Vérifie si l'utilisateur est médecin
     */
    public function isMedecin()
    {
        return $this->role === 'medecin';
    }

    /**
     * Vérifie si l'utilisateur est visiteur
     */
    public function isVisiteur()
    {
        return $this->role === 'visiteur';
    }
}