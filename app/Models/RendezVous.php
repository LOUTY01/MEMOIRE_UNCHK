<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Paiement;

class RendezVous extends Model
{
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

    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function medecin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'medecin_id');
    }

    public function paiement()
    {
        return $this->hasOne(Paiement::class, 'rendez_vous_id');
    }

    /**
     * 🔥 Synchronisation automatique RDV → Paiement
     */
    protected static function boot()
    {
        parent::boot();

        static::updated(function ($rdv) {

            if ($rdv->wasChanged('status')) {

                $paiement = $rdv->paiement;

                if ($paiement) {

                    // ✅ mapping sécurisé (IMPORTANT)
                    $statutPaiement = match ($rdv->status) {

                        'payé' => 'paye',

                        'en_attente' => 'en_attente',

                        'annulé' => 'echoue',

                        'terminé' => 'paye',

                        default => 'en_attente',
                    };

                    $paiement->update([
                        'statut' => $statutPaiement,
                        'date_paiement' => $statutPaiement === 'paye'
                            ? now()
                            : null,
                    ]);
                }
            }
        });
    }
}