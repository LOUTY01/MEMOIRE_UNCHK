<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecin;

class MedecinController extends Controller
{
    public function search(Request $request)
    {
        // 1. récupérer le terme
        $terme = trim($request->q);

        // sécurité : si vide
        if (!$terme) {
            return back()->with('error', 'Veuillez saisir un terme de recherche');
        }

        // 2. normaliser les espaces
        $terme = preg_replace('/\s+/', ' ', $terme);

        // 3. minuscule
        $terme = strtolower($terme);

        // 4. requête améliorée (PLUS FLEXIBLE)
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

        // 5. détecter la page d’origine
        $page = $request->input('page', 'accueil');

        // 6. retourner la bonne vue
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