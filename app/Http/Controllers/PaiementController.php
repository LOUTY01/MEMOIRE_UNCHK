<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Models\RendezVous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller
{
    /**
     * Afficher la page de paiement
     */
    public function create($id)
    {
        $rdv = RendezVous::with(['user', 'medecin'])->findOrFail($id);

        return view('paiement', compact('rdv'));
    }

    /**
     * Enregistrer le paiement et synchroniser le rendez-vous
     */
    public function store(Request $request)
    {
        $request->validate([
            'rendez_vous_id' => 'required|exists:rendez_vous,id',
            'operateur'      => 'required|in:Wave,Orange Money',
        ]);

        $rdv = RendezVous::findOrFail($request->rendez_vous_id);

        // Sécurité : vérifier que le rendez-vous appartient à l'utilisateur connecté
        if ($rdv->user_id != Auth::id()) {
            abort(403);
        }

        // Préparation des variables communes
        $reference = 'PAY-' . strtoupper(substr(md5(uniqid()), 0, 13));
        $montantTotal = 15500;

        // 1. Création de l'enregistrement dans la table paiements
        $paiement = Paiement::create([
            'user_id'          => Auth::id(),
            'rendez_vous_id'   => $rdv->id,
            'operateur'        => $request->operateur,
            'montant'          => $montantTotal,
            'statut'           => 'en_attente',
            'reference'        => $reference,
        ]);

        // 2. Mettre à jour les colonnes de paiement directement sur le rendez-vous
        $rdv->update([
            'status'             => 'en_attente',
            'methode_paiement'   => $request->operateur,
            'montant'            => $montantTotal,
            'reference_paiement' => $reference,
        ]);

        // ---- NOTE POUR LE LIEN DE L'OPÉRATEUR ----
        // En production, vous passeriez l'URL de votre site à Wave pour qu'il y retourne après le paiement.
        // Pour vos tests locaux, redirection directe vers le ticket de ce paiement.
        
        return redirect()->route('paiement.ticket', $paiement->id);
    }

    /**
     * Afficher le ticket après paiement (ou le dernier ticket actif de la session)
     */
    public function ticket($id = null)
    {
        if (is_null($id)) {
            // Si aucun ID n'est fourni, on cherche le tout dernier paiement de l'utilisateur connecté
            $paiement = Paiement::with(['rendezVous.medecin'])
                ->where('user_id', Auth::id())
                ->latest()
                ->first();

            // Si l'utilisateur n'a absolument aucun ticket en base de données
            if (!$paiement) {
                return redirect()->back()->with('error', "Vous n'avez pas encore de ticket disponible.");
            }
        } else {
            // Si un ID est fourni dans l'URL, on récupère ce paiement précis
            $paiement = Paiement::with(['rendezVous.medecin'])->findOrFail($id);

            // Sécurité : s'assurer que ce paiement appartient bien à la personne connectée
            if ($paiement->user_id != Auth::id()) {
                abort(403);
            }
        }

        return view('ticket', compact('paiement'));
    }
}