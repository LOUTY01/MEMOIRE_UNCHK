<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecin;

class MedecinController extends Controller
{
    public function search(Request $request)
    {
        // Récupération du terme de recherche
        $terme = trim($request->q);

        // Vérification si le champ est vide
        if (!$terme) {
            return back()->with('error', 'Veuillez saisir un terme de recherche');
        }

        // Normalisation des espaces
        $terme = preg_replace('/\s+/', ' ', $terme);

        // Conversion en minuscules
        $terme = strtolower($terme);

        // Recherche flexible
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

        // Détection de la page d'origine
        $page = $request->input('page', 'accueil');

        // Retour vers la bonne vue
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
}