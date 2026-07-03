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
     * Champs autorisés
     */
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'date_naissance',
        'sexe',
        'password',
        'role',

        // ✅ IMPORTANT POUR TON PROJET RDV
        'service',
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
     * =========================
     * ROLES
     * =========================
     */

    public function isAdmin()
    {
        return $this->role === 'administrateur';
    }

    public function isMedecin()
    {
        return $this->role === 'medecin';
    }

    public function isVisiteur()
    {
        return $this->role === 'visiteur';
    }

    /**
     * =========================
     * RELATION (OPTIONNEL MAIS PRO)
     * =========================
     */

    // si un médecin a plusieurs rendez-vous
    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class, 'medecin_id');
    }
}