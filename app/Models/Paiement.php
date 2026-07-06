<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $table = 'paiements';

    protected $fillable = [
        'user_id',
        'rendez_vous_id',
        'operateur',
        'montant',
        'statut',
        'reference',
        'date_paiement'
    ];

    // Conversion automatique du champ date en instance Carbon
    protected $casts = [
        'date_paiement' => 'datetime',
    ];

    /**
     * Relation vers l'utilisateur (patient)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation vers le rendez-vous
     */
    public function rendezVous()
    {
        return $this->belongsTo(RendezVous::class, 'rendez_vous_id');
    }

    /**
     * Scopes pour filtrer facilement les paiements
     */
    public function scopePayes($query)
    {
        return $query->where('statut', 'payé');
    }

    public function scopeEnAttente($query)
    {
        return $query->where('statut', 'en_attente');
    }

    public function scopeEchoues($query)
    {
        return $query->where('statut', 'echoue');
    }
}