<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medecin;

class MedecinController extends Controller
{
    public function search(Request $request)
    {
        $terme = trim($request->q);

        $resultats = Medecin::where('prenom', 'LIKE', "%{$terme}%")
            ->orWhere('nom', 'LIKE', "%{$terme}%")
            ->orWhere('specialite', 'LIKE', "%{$terme}%")
            ->get();

        return view('accueil', [
            'resultats' => $resultats,
            'terme' => $terme
        ]);
    }
}