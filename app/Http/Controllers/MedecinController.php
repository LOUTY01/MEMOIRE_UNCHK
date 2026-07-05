<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecin;
use App\Models\RendezVous;
use Illuminate\Support\Facades\Auth;

class MedecinController extends Controller
{
    /**
     * Dashboard médecin (IMPORTANT → corrige ton erreur actuelle)
     */
  public function index()
{
    $user = auth()->user();

    // Vérifier si l'utilisateur possède un profil médecin lié
    if (!$user->medecin) {
        // Rediriger avec un message d'erreur si l'utilisateur n'est pas un médecin
        return redirect()->route('accueil')->with('error', 'Vous n\'avez pas accès à cet espace.');
    }

    $medecinId = $user->medecin->id;

    $rendezvous = RendezVous::where('medecin_id', $medecinId)
        ->where('statut_paiement', 'reussi')
        ->with('user')
        ->orderBy('date', 'asc')
        ->get();

    return view('medecin.dashboard', compact('rendezvous'));
}
    /**
     * Recherche médecin
     */
    public function search(Request $request)
    {
        // Récupération du terme de recherche
        $terme = trim($request->q);

        // Vérification si vide
        if (!$terme) {
            return back()->with('error', 'Veuillez saisir un terme de recherche');
        }

        // Normalisation
        $terme = preg_replace('/\s+/', ' ', $terme);
        $terme = strtolower($terme);

        // Recherche
        $resultats = Medecin::whereRaw("
            LOWER(prenom) LIKE ?
            OR LOWER(nom) LIKE ?
            OR LOWER(CONCAT(prenom, ' ', nom)) LIKE ?
            OR LOWER(specialite) LIKE ?
        ", [
            "%{$terme}%",
            "%{$terme}%",
            "%{$terme}%",
            "%{$terme}%"
        ])->get();

        // Page d'origine
        $page = $request->input('page', 'accueil');

        // Retour vue
        if ($page === 'accueilutilisateur') {
            return view('accueilutilisateur', [
                'resultats' => $resultats,
                'terme' => $terme
            ]);
        }

        return view('accueil', [
            'resultats' => $resultats,
            'terme' => $terme
        ]);
    }

    /**
     * Afficher profil médecin (optionnel mais utile)
     */
    public function show($id)
    {
        $medecin = Medecin::findOrFail($id);

        return view('medecin.show', compact('medecin'));
    }
}