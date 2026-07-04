<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class RendezVous extends Model
{
    /**
     * Nom de la table
     */
    protected $table = 'rendez_vous';

    /**
     * Champs autorisés pour l'insertion
     */
    protected $fillable = [
        'user_id',
        'medecin_id',
        'service',
        'date',
        'heure',
        'motif',
        'status',
        'methode_paiement',
        'montant',
        'reference_paiement',
    ];

    /**
     * Relation avec le patient
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Alias de la relation patient
     * (utile si tu utilises déjà $rdv->user dans d'autres pages)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relation avec le médecin
     */
    public function medecin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'medecin_id');
    }
}