<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class RendezVous extends Model
{
    // Correction ici : liaison avec votre vraie table 'rendez_vous'
    protected $table = 'rendez_vous';

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
     * Relation avec le Patient (liaison via user_id)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relation avec le Médecin (liaison via medecin_id)
     */
    public function medecin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'medecin_id');
    }
}