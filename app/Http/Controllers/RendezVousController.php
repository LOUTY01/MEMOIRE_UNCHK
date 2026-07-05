<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use App\Models\Service;
use App\Models\User;
use App\Models\Paiement;
use App\Models\Medecin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RendezVousController extends Controller
{
    /**
     * PAGE RDV (formulaire utilisateur)
     */
    public function index()
    {
        $medecins = Medecin::all();

        $specialites = Medecin::select('specialite')
            ->distinct()
            ->pluck('specialite');

        return view('rendezvous', compact('medecins', 'specialites'));
    }

    /**
     * ENREGISTRER RDV
     */
    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required',
            'medecin_id' => 'required',
            'date' => 'required|date',
            'heure' => 'required',
            'telephone' => 'required',
            'nom_complet' => 'required',
            'operateur' => 'required',
        ]);

        return DB::transaction(function () use ($request) {

            // 🔥 IMPORTANT : lien utilisateur connecté
            $rendezvous = RendezVous::create([
                'user_id' => Auth::id(), // ✔ FIX PRINCIPAL
                'service' => $request->service,
                'medecin_id' => $request->medecin_id,
                'date' => $request->date,
                'heure' => $request->heure,
                'status' => 'en_attente',
                'statut_paiement' => 'en_attente',
                'telephone' => $request->telephone,
                'nom_complet' => $request->nom_complet,
            ]);

            Paiement::create([
                'user_id' => Auth::id(),
                'rendez_vous_id' => $rendezvous->id,
                'operateur' => $request->operateur,
                'montant' => 0,
                'statut' => 'en_attente',
                'reference' => 'SAMA-' . rand(10000, 99999),
            ]);

            return redirect()->route('paiement.page', $rendezvous->id)
                ->with('success', 'Rendez-vous créé avec succès ✔');
        });
    }

    /**
     * 🔥 MES TICKETS (IMPORTANT POUR TON PROBLÈME)
     */
    public function mesTickets()
    {
        $tickets = RendezVous::where('user_id', Auth::id())
            ->with('medecin')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('ticket', compact('tickets'));
    }

    /**
     * EDIT ADMIN
     */
    public function edit($id)
    {
        $rendezvous = RendezVous::findOrFail($id);

        $services = Service::all();
        $medecins = User::where('role', 'medecin')->get();

        return view('rendezvous_edit', compact('rendezvous', 'services', 'medecins'));
    }

    /**
     * UPDATE RDV
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'service' => 'required',
            'medecin_id' => 'required',
            'date' => 'required',
            'heure' => 'required',
            'status' => 'required|in:en_attente,payé,annulé,terminé',
        ]);

        return DB::transaction(function () use ($request, $id) {

            $rendezvous = RendezVous::findOrFail($id);

            $rendezvous->update([
                'service' => $request->service,
                'medecin_id' => $request->medecin_id,
                'date' => $request->date,
                'heure' => $request->heure,
                'status' => $request->status,
            ]);

            $paiement = Paiement::where('rendez_vous_id', $rendezvous->id)->first();

            if ($paiement) {
                $paiement->update([
                    'statut' => $request->status,
                    'date_paiement' => $request->status === 'payé' ? now() : null
                ]);
            }

            return back()->with('success', 'Mis à jour avec succès ✔');
        });
    }

    /**
     * SUPPRESSION RDV
     */
    public function destroy($id)
    {
        $rendezvous = RendezVous::findOrFail($id);

        Paiement::where('rendez_vous_id', $rendezvous->id)->delete();

        $rendezvous->delete();

        return redirect()
            ->route('administrateur.dashboard')
            ->with('success', 'Supprimé avec succès ✔');
    }
}