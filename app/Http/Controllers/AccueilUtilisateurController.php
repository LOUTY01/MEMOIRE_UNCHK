<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecin;

class AccueilUtilisateurController extends Controller
{
    // PAGE ACCUEIL UTILISATEUR
    public function index()
    {
        return view('accueilutilisateur');
    }

    // RECHERCHE MÉDECINS
    public function search(Request $request)
    {
        // 1. terme de recherche
        $terme = trim($request->q);

        // sécurité : si vide
        if (!$terme) {
            return redirect()->back()->with('error', 'Veuillez saisir un terme de recherche');
        }

        // 2. normalisation
        $terme = preg_replace('/\s+/', ' ', $terme);
        $termeLower = strtolower($terme);

        // 3. requête flexible
        $resultats = Medecin::where(function ($query) use ($termeLower) {

            $query->whereRaw("LOWER(prenom) LIKE ?", ["%{$termeLower}%"])
                  ->orWhereRaw("LOWER(nom) LIKE ?", ["%{$termeLower}%"])
                  ->orWhereRaw("LOWER(CONCAT(prenom, ' ', nom)) LIKE ?", ["%{$termeLower}%"])
                  ->orWhereRaw("LOWER(specialite) LIKE ?", ["%{$termeLower}%"]);

        })->get();

        // 4. retour vue avec données
        return view('accueilutilisateur', [
            'resultats' => $resultats,
            'terme' => $terme
        ]);
    }
}