<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Medecin;
use App\Models\RendezVous;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, MustVerifyEmailTrait;

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
     * RENDEZ-VOUS
     * =========================
     */
    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class, 'medecin_id');
    }

    /**
     * =========================
     * RELATION MEDECIN (IMPORTANT)
     * =========================
     */
    public function medecin()
    {
        return $this->hasOne(Medecin::class, 'user_id');
    }
}