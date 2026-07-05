<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\RendezVous;

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

    /**
     * Relation utilisateur (patient)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation rendez-vous
     */
    public function rendezVous()
    {
        return $this->belongsTo(RendezVous::class, 'rendez_vous_id');
    }

    /**
     * Scope : paiements payés
     */
    public function scopePayes($query)
    {
        return $query->where('statut', 'payé');
    }

    /**
     * Scope : paiements en attente
     */
    public function scopeEnAttente($query)
    {
        return $query->where('statut', 'en_attente');
    }

    /**
     * Scope : paiements échoués
     */
    public function scopeEchoues($query)
    {
        return $query->where('statut', 'echoue');
    }

    /**
     * Accès direct au rendez-vous (correct)
     */
    public function rendez()
    {
        return $this->belongsTo(RendezVous::class, 'rendez_vous_id');
    }
}