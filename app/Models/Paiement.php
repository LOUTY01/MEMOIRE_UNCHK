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
        'reference'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rendezVous()
    {
        return $this->belongsTo(RendezVous::class, 'rendez_vous_id');
    }
}